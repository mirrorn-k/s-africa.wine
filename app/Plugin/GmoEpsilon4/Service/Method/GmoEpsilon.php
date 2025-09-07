<?php

namespace Plugin\GmoEpsilon4\Service\Method;

use Doctrine\ORM\EntityManagerInterface;
use Eccube\Common\Constant;
use Eccube\Common\EccubeConfig;
use Eccube\Entity\Master\OrderStatus;
use Eccube\Entity\Customer;
use Eccube\Entity\Order;
use Eccube\Repository\MailHistoryRepository;
use Eccube\Repository\OrderRepository;
use Eccube\Repository\Master\OrderStatusRepository;
use Eccube\Service\CartService;
use Eccube\Service\MailService;
use Eccube\Service\Payment\PaymentDispatcher;
use Eccube\Service\Payment\PaymentMethodInterface;
use Eccube\Service\Payment\PaymentResult;
use Eccube\Service\PurchaseFlow\PurchaseContext;
use Eccube\Service\PurchaseFlow\PurchaseFlow;
use Plugin\GmoEpsilon4\Entity\CreditAccessLog;
use Plugin\GmoEpsilon4\Entity\CreditBlock;
use Plugin\GmoEpsilon4\Repository\ConfigRepository;
use Plugin\GmoEpsilon4\Repository\CreditAccessLogRepository;
use Plugin\GmoEpsilon4\Repository\CreditBlockRepository;
use Plugin\GmoEpsilon4\Service\GmoEpsilonRequestService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Form\FormInterface;
use Twig_Environment;


/**
 * 決済モジュール 決済処理 基底クラス
 */
class GmoEpsilon implements PaymentMethodInterface
{
    protected $st_code;
    protected $mission_code;
    /**
     * @var MailHistoryRepository
     */
    protected $mailHistoryRepository;

    public function __construct(
        EntityManagerInterface $entityManager,
        Twig_Environment $twig,
        EccubeConfig $eccubeConfig,
        OrderRepository $orderRepository,
        OrderStatusRepository $orderStatusRepository,
        CartService $cartService,
        MailService $mailService,
        PurchaseFlow $shoppingPurchaseFlow,
        CreditAccessLog $creditAccessLog,
        CreditBlock $creditBlock,
        ConfigRepository $configRepository,
        CreditAccessLogRepository $creditAccessLogRepository,
        CreditBlockRepository $creditBlockRepository,
        GmoEpsilonRequestService $gmoEpsilonRequestService,
        MailHistoryRepository $mailHistoryRepository
    ) {
        $this->entityManager = $entityManager;
        $this->twig = $twig;
        $this->eccubeConfig = $eccubeConfig;
        $this->orderRepository = $orderRepository;
        $this->orderStatusRepository = $orderStatusRepository;
        $this->cartService = $cartService;
        $this->mailService = $mailService;
        $this->purchaseFlow = $shoppingPurchaseFlow;
        $this->gmoEpsilonRequestService = $gmoEpsilonRequestService;

        $this->creditAccessLog = $creditAccessLog;
        $this->creditBlock = $creditBlock;
        $this->creditAccessLogRepository = $creditAccessLogRepository;
        $this->creditBlockRepository = $creditBlockRepository;
        $this->mailHistoryRepository = $mailHistoryRepository;
        $this->Config = $configRepository->get();

        $this->init();
    }

    /**
     * {@inheritdoc}
     */
    public function verify()
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function apply()
    {
        logs('gmo_epsilon')->info('pay process start. order_id = ' . $this->Order->getId());

        $dispatcher = new PaymentDispatcher();

        // リクエストパラメータをセット
        $arrParameter = $this->setParameter($this->Order);

        // データ送信(POST)
        $arrXML = $this->gmoEpsilonRequestService->sendData($this->Config->getDestinationUrl(), $arrParameter);

        // エラーチェック
        $err_code = $this->gmoEpsilonRequestService->getXMLValue($arrXML, 'RESULT', 'ERR_CODE');
        if (!empty($err_code)) {
            $err_detail = $this->gmoEpsilonRequestService->getXMLValue($arrXML, 'RESULT', 'ERR_DETAIL');

            logs('gmo_epsilon')->error('ERR_CODE = ' . $err_code);
            logs('gmo_epsilon')->error('ERR_DETAIL = ' . $err_detail);

            $content = $this->twig->render('error.twig', [
                'error_title' => trans('gmo_epsilon.front.shopping.error'),
                'error_message' => $err_detail,
            ]);
            $dispatcher->setResponse(Response::create($content));
        } else {
            // 受注ステータスを決済処理中へ変更
            $OrderStatus = $this->orderStatusRepository->find(OrderStatus::PENDING);
            $this->Order->setOrderStatus($OrderStatus);

            $this->purchaseFlow->prepare($this->Order, new PurchaseContext());

            // Epsilonに遷移
            $url = $this->gmoEpsilonRequestService->getXMLValue($arrXML,'RESULT','REDIRECT');
            logs('gmo_epsilon')->info('Data response arrReturn 3DS 2.0 => リンク決済 (Credit):  = '.print_r($url, true));
            $response = new RedirectResponse($url);
            $dispatcher->setResponse($response);
        }

        return $dispatcher;
    }

    /**
     * {@inheritdoc}
     */
    public function checkout()
    {
        $this->purchaseFlow->commit($this->Order, new PurchaseContext());

        $result = new PaymentResult();
        $result->setSuccess(true);

        return $result;
    }

    /**
     * {@inheritdoc}
     */
    public function setFormType(FormInterface $form)
    {
        $this->form = $form;
    }

    /**
     * {@inheritdoc}
     */
    public function setOrder(Order $Order)
    {
        $this->Order = $Order;
    }

    /**
     * {@inheritdoc}
     */
    public function setRequest(Request $request)
    {
        $this->request = $request;
    }

    /**
     * リクエストパラメータを設定
     *
     * @param \Eccube\Entity\Order $Order
     * @return array
     */
    function setParameter($Order)
    {
        $Customer = $Order->getCustomer();
        $user_id = is_null($Customer) ? 'non_customer' : $Customer->getId();

        $itemInfo = $this->getItemInfo();

        if (!isset($this->mission_code)) {
            $this->mission_code = 1;
        } else {
            // 定期購入・非会員の場合、空文字に置き換え
            $user_id = $user_id == 'non_customer' ? '' : $user_id;
        }

        if (!isset($this->process_code)) {
            $this->process_code = 1;
        }

        // 送信データを作成
        $arrResult = array(
            'contract_code' => $this->Config->getContractCode(),
            'user_id' => $user_id,                                              // ユーザID
            'user_name' => $Order->getName01().$Order->getName02(),             // ユーザ名
            'user_mail_add' => $Order->getEmail(),                              // メールアドレス
            'order_number' => $Order->getId().'x'.date('YmdHis'),               // オーダー番号
            'item_code' => $itemInfo['item_code'],                              // 商品コード(代表)
            'item_name' => $itemInfo['item_name'],                              // 商品名(代表)
            'item_price' => $Order->getPaymentTotal(),                          // 商品価格(税込み総額)
            'st_code' => $this->st_code,                                        // 決済区分
            'mission_code' => $this->mission_code,                              // 課金区分(固定)
            'process_code' => $this->process_code,                              // 処理区分(固定)
            'xml' => '1',                                                       // 応答形式(固定)
            'memo1' => "",                                                      // 予備01
            'memo2' => "EC-CUBE4_" . date("YmdHis"),                            // 予備02
            );

        return $arrResult;
    }

    /**
     * カートから代表商品情報を取得
     *
     * @return array
     */
    function getItemInfo()
    {
        foreach ($this->Order->getOrderItems() as $orderItem) {
            $item_code = $orderItem->getProductCode();

            // 空の場合は仮の値をセット
            if (empty($item_code)) {
                $item_code = 'no_code';
            } else {
                /**
                 * 商品コードを整形
                 * 1. 全角→半角
                 * 2. 許容されない文字を削除
                 * 3. 64byteに丸め
                 */
                $item_code = mb_convert_kana($item_code, 'kvrn');
                $item_code = preg_replace('/[^a-zA-Z0-9\.\-\+\/]/', '', $item_code);
                if (64 < strlen($item_code)) {
                    $item_code = mb_strimwidth($item_code, 0, 64);
                }
            }

            $itemInfo['item_code'] = $item_code;
            $itemInfo['item_name'] = $orderItem->getProductName().'x'.$orderItem->getQuantity().'個（代表）';
            return $itemInfo;
        }
    }

    /**
     * 決済完了処理
     * @return string $redirect_url リダイレクト先
     */
    public function compProcess()
    {
        $arrCheckParameter = $this->getCheckParameter();

        // パラメータをチェック
        if (!$this->checkParameter($this->request, $arrCheckParameter)) {
            logs('gmo_epsilon')->error('response error. get fraud GET.');

            $content = $this->twig->render('error.twig', [
                'error_title' => 'システムエラーが発生しました。',
                'error_message' => '不正なGETリクエストを受信しました。',
            ]);
            return Response::create($content);
        }

        // purchaseFlow::commitを呼び出し, 購入処理を完了させる.
        $this->purchaseFlow->commit($this->Order, new PurchaseContext());

        $this->updateOrder();

        // カートを削除する
        $this->cartService->clear();

        // メール送信
        $MailHistory = $this->mailHistoryRepository->findBy(['Order' => $this->Order]);
        // メール送信の処理は必ず入れるが、メール履歴（dtb_mail_history）を確認して無ければ送信の判断を入れる。
        if (!$MailHistory) {
            logs('gmo_epsilon')->addInfo('send order mail');
            $MailHistory = $this->mailService->sendOrderMail($this->Order);
        }

        logs('gmo_epsilon')->info('pay process end. order_id = ' . $this->Order->getId());
    }

    /**
     * 取得レスポンスパラメータの項目チェック
     *
     * @param array $response
     * @param array $arrCheckParameter
     * @return boolean
     */
    function checkParameter($request, $arrCheckParameter)
    {
        foreach ($arrCheckParameter as $key) {
            if (empty($request->get($key)) && $request->get($key) !== "0") {
                return false;
            }
        }

        return true;
    }

    /**
     * 受注更新処理
     */
    public function updateOrder()
    {
        // 受注ステータスを新規受付へ変更
        $OrderStatus = $this->orderStatusRepository->find(OrderStatus::NEW);
        $this->Order->setOrderStatus($OrderStatus);
        $this->Order->setPaymentDate(new \DateTime());

        // 会員の場合、購入回数、購入金額などを更新
        if ($Customer = $this->Order->getCustomer()) {
            $this->orderRepository->updateOrderSummary($Customer);
        }

        // トランザクションコードを登録
        $this->Order->setTransCode($this->request->get('trans_code'));
        $this->Order->setGmoEpsilonOrderNo($this->request->get('order_number'));
    }


    /**
     * 不正アクセスブロック処理
     * @return PaymentDispatcher $dispatcher
     */
    function accessBlockProcess()
    {
        $dispatcher = new PaymentDispatcher();

        $block_mode = $this->Config->getBlockMode();

        if ($block_mode) {
            $block_flg = false;

            // アクセス頻度時間を過ぎたIPアドレスを削除
            $this->creditAccessLogRepository->deleteAllIpAddressForPassedAccessFrequencyTime($this->Config->getAccessFrequencyTime());
            // ブロック時間を過ぎたIPアドレスを削除
            $this->creditBlockRepository->deleteAllIpAddressForPassedBlockTime($this->Config->getBlockTime());

            $arrWhiteList = explode(",", $this->Config->getWhiteList());
            $is_registed_whiteList = in_array($_SERVER["REMOTE_ADDR"], $arrWhiteList);
            if (!$is_registed_whiteList) {
                $this->registCreditAccessLog();
            }

            if ($this->isAlreadyBlockedCreditAccess()) {
                $block_flg = true;
            } else if (!$is_registed_whiteList) {
                $block_flg = $this->judgeAccessBlocking();
            }

            if ($block_flg && !$is_registed_whiteList) {
                $err_detail = 'message';
                $content = $this->twig->render('error.twig', [
                    'error_title' => trans('front.shopping.error'),
                    'error_message' => trans('front.shopping.order_error'),
                ]);
                $dispatcher->setResponse(Response::create($content));
            }
        }

        return $dispatcher;
    }

    /**
     * 既に不正アクセスとしてブロックされていないか確認する
     */
    public function isAlreadyBlockedCreditAccess()
    {
        $creditBlock = $this->creditBlockRepository->findBy(['ip_address' => $_SERVER["REMOTE_ADDR"]]);

        return $creditBlock ? true : false;
    }

    /**
     * クレジットアクセスログを記録する
     */
    public function registCreditAccessLog()
    {
        $date = new \DateTime();
        logs('gmo_epsilon')->info("regist access log IPADDRESS:$_SERVER[REMOTE_ADDR] DATE:{$date->format("Y-m-d H:i:s")}");
        $this->creditAccessLog->setIpAddress($_SERVER["REMOTE_ADDR"]);
        $this->creditAccessLog->setAccessDate($date);

        $this->entityManager->persist($this->creditAccessLog);
        $this->entityManager->flush($this->creditAccessLog);
    }

    /**
     * 不正アクセスをブロックする
     */
    public function judgeAccessBlocking()
    {
        $creditAccessLog = $this->creditAccessLogRepository->findBy(['ip_address' => $_SERVER["REMOTE_ADDR"]]);

        if (count($creditAccessLog) >= $this->Config->getAccessFrequency()) {
            // 不正アクセスと判断
            $date = new \DateTime();
            logs('gmo_epsilon')->info("access block IPADDRESS:$_SERVER[REMOTE_ADDR] DATE:{$date->format("Y-m-d H:i:s")}");

            $this->creditBlock->setIpAddress($_SERVER["REMOTE_ADDR"]);
            $this->creditBlock->setBlockDate(new \DateTime());

            $this->entityManager->persist($this->creditBlock);
            $this->entityManager->flush($this->creditBlock);

            return true;
        }

        return false;
    }
}
