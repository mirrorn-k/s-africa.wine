<?php

namespace Plugin\GmoEpsilon4\Controller;

use Eccube\Common\EccubeConfig;
use Eccube\Controller\AbstractController;
use Eccube\Entity\Master\OrderStatus;
use Eccube\Entity\Order;
use Eccube\Repository\MailHistoryRepository;
use Eccube\Repository\Master\OrderStatusRepository;
use Eccube\Repository\OrderRepository;
use Eccube\Service\CartService;
use Eccube\Service\MailService;
use Eccube\Service\PurchaseFlow\PurchaseContext;
use Eccube\Service\PurchaseFlow\PurchaseFlow;
use Eccube\Service\ShoppingService;
use Plugin\GmoEpsilon4\Repository\ConfigRepository;
use Plugin\GmoEpsilon4\Service\GmoEpsilonRequestService;
use Plugin\GmoEpsilon4\Util\PaymentUtil;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Twig_Environment;

/**
 * リンク式決済の注文/戻る/完了通知を処理する.
 */
class PaymentController extends AbstractController
{
    /**
     * @var OrderRepository
     */
    protected $orderRepository;

    /**
     * @var OrderStatusRepository
     */
    protected $orderStatusRepository;

    /**
     * @var PurchaseFlow
     */
    protected $purchaseFlow;

    /**
     * @var CartService
     */
    protected $cartService;

    /**
     * @var MailHistoryRepository
     */
    protected $mailHistoryRepository;

    /**
     * PaymentController constructor.
     *
     * @param OrderRepository $orderRepository
     * @param ShoppingService $shoppingService
     * @param MailHistoryRepository $mailHistoryRepository
     */
    public function __construct(
        EccubeConfig $eccubeConfig,
        Twig_Environment $twig,
        OrderRepository $orderRepository,
        OrderStatusRepository $orderStatusRepository,
        PurchaseFlow $shoppingPurchaseFlow,
        CartService $cartService,
        MailService $mailService,
        ConfigRepository $configRepository,
        GmoEpsilonRequestService $gmoEpsilonRequestService,
        MailHistoryRepository $mailHistoryRepository
    ) {
        $this->eccubeConfig = $eccubeConfig;
        $this->twig = $twig;
        $this->orderRepository = $orderRepository;
        $this->orderStatusRepository = $orderStatusRepository;
        $this->purchaseFlow = $shoppingPurchaseFlow;
        $this->cartService = $cartService;
        $this->mailService = $mailService;
        $this->gmoEpsilonRequestService = $gmoEpsilonRequestService;
        $this->mailHistoryRepository = $mailHistoryRepository;
        $this->Config = $configRepository->get();
        $this->objPayUtil = new PaymentUtil($this->eccubeConfig);
    }

    /**
     * @Route("/shopping/epsilon_payment/back", name="gmo_epsilon4_back")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function back(Request $request)
    {
        $orderId = $this->objPayUtil->getOrderId($request->get('order_number'));
        $Order = $this->getOrderByNo($orderId);

        if (!$Order) {
            throw new NotFoundHttpException();
        }

        if ($this->getUser() != $Order->getCustomer()) {
            throw new NotFoundHttpException();
        }

        // 受注ステータスを購入処理中へ変更
        $OrderStatus = $this->orderStatusRepository->find(OrderStatus::PROCESSING);
        $Order->setOrderStatus($OrderStatus);

        // purchaseFlow::rollbackを呼び出し, 購入処理をロールバックする.
        $this->purchaseFlow->rollback($Order, new PurchaseContext());

        $this->entityManager->flush();

        return $this->redirectToRoute('shopping');
    }

    /**
     * 完了画面へ遷移する.
     *
     * @Route("/shopping/epsilon_payment/complete", name="gmo_epsilon4_complete")
     */
    public function complete(Request $request)
    {
        $orderId = $this->objPayUtil->getOrderId($request->get('order_number'));
        logs('gmo_epsilon')->addInfo('決済完了通知 : start.'.print_r($request->getContent(),true));
        if (empty($orderId)) {
            // コンビニ（後払い系も？）の場合、sessionからorderNoを拾う
            $orderId = $this->session->get('eccube.plugin.epsilon.orderId', []);
        }

        logs('gmo_epsilon')->addInfo('orderId='.$orderId);
        // 決済処理中の受注を取得
        $Order = $this->getOrderByNo($orderId);

        if (!$Order || empty($Order)) {
            // レスポンスにorder_numberが含まれていない決済を考慮してオーダー情報確認CGIから受注番号を取得
            $arrXML = $this->getOrderInfo($request->get('trans_code'));
            $err_code = $this->gmoEpsilonRequestService->getXMLValue($arrXML, 'RESULT', 'ERR_CODE');
            if (empty($err_code)) {
                $orderNo = $this->gmoEpsilonRequestService->getXMLValue($arrXML, 'RESULT', 'ORDER_NUMBER');
                $orderId = $this->objPayUtil->getOrderId($orderNo);
                $Order = $this->orderRepository->find($orderId);
            }

            if (!$Order || empty($Order)) {
                logs('gmo_epsilon')->addInfo('NotFoundHttpException : オーダー情報が取得できない');
                throw new NotFoundHttpException();
            }
        }
        // Check the order was completed
        if ($Order->getGmoEpsilonOrderNo()) {
            log_info('[注文確認] 注文が完了しました.', [$Order->getId()]);
            return $this->redirectToRoute('shopping_error');
        }

        if ($this->getUser() != $Order->getCustomer()) {
            throw new NotFoundHttpException();
        }

        if (!is_null($Order->getPayment())) {
            $method_class = $Order->getPayment()->getMethodClass();

            // 決済方法に応じたインスタンスを取得
            $PaymentMethod = $this->container->get($method_class);

            $PaymentMethod->setOrder($Order);
            $PaymentMethod->setRequest($request);

            // メールリンク決済の場合、選択された支払方法を取得
            if (preg_match('/Maillink/', $method_class)) {
                $arrXML = $this->getOrderInfo($request->get('trans_code'));

                // エラーチェック
                $err_code = $this->gmoEpsilonRequestService->getXMLValue($arrXML, 'RESULT', 'ERR_CODE');
                if (empty($err_code)) {
                    $PaymentMethod->payment_code = $this->gmoEpsilonRequestService->getXMLValue($arrXML, 'RESULT', 'PAYMENT_CODE');
                }
            }
        }

        // 購入完了処理
        $PaymentMethod->compProcess();

        // FIXME 完了画面を表示するため, 受注IDをセッションに保持する
        $this->session->set('eccube.front.shopping.order.id', $Order->getId());

        $this->entityManager->flush();

        return $this->redirectToRoute('shopping_complete');
    }

    /**
     * 結果通知URLを受け取る.
     *
     * @Route("/epsilon_receive_complete", name="gmo_epsilon4_receive_complete")
     */
    public function receiveComplete(Request $request)
    {
        logs('gmo_epsilon')->addInfo('決済完了通知 : start.');

        // 注文完了画面の処理と競合するため、処理を遅らせる
        sleep(10);

        // 決済会社から受注番号を受け取る
        $orderId = $this->objPayUtil->getOrderId($request->get('order_number'));
        logs('gmo_epsilon')->addInfo('orderId='.$orderId);
        $Order = $this->getOrderByNo($orderId);

        if (!$Order || empty($Order)) {
            $Order = $this->orderRepository->findOneBy(['order_no' => $orderId]);
            if (!$Order || empty($Order)) {
                logs('gmo_epsilon')->error('決済完了通知 : Not Found Order. POST param argument ' . print_r($request->getContent(), true));
                // 異常応答
                return new Response(0);
            }
            logs('gmo_epsilon')->addInfo('決済完了通知 : end. 対象データ処理済み');
            // 正常終了 完了画面で処理済み
            return new Response(1);
        }

        $contract_code = $this->Config->getContractCode();
        if ($contract_code != $request->get('contract_code') ||
                empty($request->get('trans_code')) ||
                empty($request->get('state'))
        ) {
            logs('gmo_epsilon')->error('決済完了通知 : POST param argument ' . print_r($request->getContent(), true));
            // 異常応答
            return new Response(0);
        }

        // Get order status before updating
        $orderStatusIdBefore = $Order->getOrderStatus()->getId();

        // purchaseFlow::commitを呼び出し, 購入処理を完了させる.
        $this->purchaseFlow->commit($Order, new PurchaseContext());

        // 受注ステータスを新規受付へ変更
        $OrderStatus = $this->orderStatusRepository->find(OrderStatus::NEW);
        $Order->setOrderStatus($OrderStatus);
        $Order->setPaymentDate(new \DateTime());

        // 会員の場合、購入回数、購入金額などを更新
        if ($Customer = $Order->getCustomer()) {
            $this->orderRepository->updateOrderSummary($Customer);
        }

        // トランザクションコードを登録
        $Order->setTransCode($request->get('trans_code'));

        // カートを削除する
        $this->cartService->clear();

        // メール送信
        $MailHistory = $this->mailHistoryRepository->findBy(['Order' => $Order]);

        /**
         * ■操作と現象
         * ユーザーが決済処理をした直後に画面を閉じたりした時
         * ①イプシロン側の決済処理は完了
         * ②ECCUBE側が決済処理中のまま
         * ■決済完了通知の動き
         * イプシロン側の処理は完了 してるので、決済完了通知がくる。
         * 既にECCUBE側の決済処理が完了している場合は対象データ処理済みで終了。
         * 決済処理中ならステータスの更新等の決済処理をする。
         * メール送信の処理は必ず入れるが、メール履歴（dtb_mail_history）を確認して無ければ送信の判断を入れる。
         */
        if (!$MailHistory && $orderStatusIdBefore != OrderStatus::NEW) {
            $MailHistory = $this->mailService->sendOrderMail($Order);
        }

        $this->entityManager->flush();

        logs('gmo_epsilon')->addInfo('決済完了通知 : end.');

        // 正常応答
        return new Response(1);
    }

    /**
     * 結果通知URLを受け取る.
     *
     * @Route("/epsilon_receive_conveni_and_payeasy_complete", name="gmo_epsilon4_receive_conveni_and_payeasy_complete")
     */
    public function receiveConveniAndPayeasyComplete(Request $request)
    {
        logs('gmo_epsilon')->addInfo('決済完了通知(コンビニ、ペイジー) : start.');

        // 受注情報を取得
        $Order = $this->orderRepository->findOneBy([
            'order_no' => $this->objPayUtil->getOrderId($request->get('order_number')),
            'trans_code' => $request->get('trans_code'),
        ]);

        if (!$Order) {
            logs('gmo_epsilon')->error('決済完了通知 : Not Found Order. POST param argument ' . print_r($request->getContent(), true));

            // 異常応答
            return new Response(0);
        }

        // 受注ステータスを対応中へ変更
        $OrderStatus = $this->orderStatusRepository->find(OrderStatus::IN_PROGRESS);
        $Order->setOrderStatus($OrderStatus);
        $Order->setPaymentDate(new \DateTime());

        $this->entityManager->flush();

        logs('gmo_epsilon')->addInfo('決済完了通知(コンビニ、ペイジー) : end.');

        // 正常応答
        return new Response(1);
    }

    /**
     * 注文番号で受注を検索する.
     *
     * @param $orderId
     *
     * @return Order
     */
    private function getOrderByNo($orderId)
    {
        /** @var OrderStatus $pendingOrderStatus */
        $pendingOrderStatus = $this->orderStatusRepository->find(OrderStatus::PENDING);

        /** @var Order $Order */
        $Order = $this->orderRepository->findOneBy([
            'order_no' => $orderId,
            'OrderStatus' => $pendingOrderStatus,
        ]);

        return $Order;
    }

    function getOrderInfo($trans_code)
    {
        $info_conf_url = $this->Config->getInfoConfUrl();
        $contract_code = $this->Config->getContractCode();

        // リクエストパラメータを設定
        $arrParameter = array(
            'contract_code' => $contract_code,
            'trans_code' => $trans_code,
        );

        // リクエスト送信
        $arrXML = $this->gmoEpsilonRequestService->sendData($info_conf_url, $arrParameter);

        return $arrXML;
    }
}
