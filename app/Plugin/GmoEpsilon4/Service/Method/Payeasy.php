<?php

namespace Plugin\GmoEpsilon4\Service\Method;

use Eccube\Entity\Master\OrderStatus;
use Plugin\GmoEpsilon4\Service\Method\GmoEpsilon;

class Payeasy extends GmoEpsilon
{

    public function init() {
        $this->st_code = $this->eccubeConfig['gmo_epsilon']['st_code']['payeasy'];
    }

    public function updateOrder()
    {
        // 決済情報取得(ペイジー決済)のリクエストパラメータを設定
        $arrParameter = [
            'contract_code' => $this->Config->getContractCode(),
            'order_number' => $this->request->get('order_number'),
        ];

        // データ送信(POST)
        $arrXML = $this->gmoEpsilonRequestService->sendData($this->Config->getInfoConfUrl(), $arrParameter);

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
            return Response::create($content);
        } else {

            $pay_info = $this->getPaymentInfo($arrXML);
            $this->setOrderCompleteMessages($pay_info);

            // 受注ステータスを新規受付へ変更
            $OrderStatus = $this->orderStatusRepository->find(OrderStatus::NEW);
            $this->Order->setOrderStatus($OrderStatus);

            // 会員の場合、購入回数、購入金額などを更新
            if ($Customer = $this->Order->getCustomer()) {
                $this->orderRepository->updateOrderSummary($Customer);
            }

            // トランザクションコードを登録
            $this->Order->setTransCode($this->request->get('trans_code'));
            $this->Order->setGmoEpsilonOrderNo($this->request->get('order_number'));
        }
    }

    /**
     * 決済情報を取得
     * @param array arrXML
     * @return String pay_info
     */
    function getPaymentInfo($arrXML)
    {
        $company_code = $this->gmoEpsilonRequestService->getXMLValue($arrXML, 'RESULT', 'KIGYOU_CODE');
        $receipt_no = $this->gmoEpsilonRequestService->getXMLValue($arrXML, 'RESULT', 'RECEIPT_NO');
        $payment_limit = $this->gmoEpsilonRequestService->getXMLValue($arrXML, 'RESULT', 'CONVENI_LIMIT');
        $trans_code = $this->gmoEpsilonRequestService->getXMLValue($arrXML, 'RESULT', 'TRANS_CODE');

        // エラーチェック
        if (empty($receipt_no) || empty($company_code) && empty($payment_limit)) {
            logs('gmo_epsilon')->error('request erro payeasy');
            $content = $this->twig->render('error.twig', [
                'error_title' => trans('gmo_epsilon.front.shopping.error'),
                'error_message' => "注文番号：".$this->request->get('order_number')."\n"
                                    ."ペイジー決済の取得に失敗しました。この注文についてショップにお問合せください。",
            ]);
            return Response::create($content);
        }

        // ペイジー決済の決済情報を設定
        $pay_info  = "収納機関番号：$company_code\n";
        $pay_info .= "確認番号：$receipt_no\n";
        $pay_info .= "支払期限：$payment_limit\n";

        return $pay_info;
    }

    /**
     * 決済情報を受注完了メッセージにセット
     * @param string pay_info
     */
    function setOrderCompleteMessages($pay_info)
    {
        $complete_mail_message = <<<php
        ************************************************
        　ペイジー決済情報
        ************************************************
        $pay_info
php;

        $pay_info = nl2br($pay_info, false);

        $complete_message = <<<php
        <div class="ec-rectHeading">
            <h2>■ペイジー決済情報</h2>
        </div>
        <p style="text-align:left; word-wrap: break-word; white-space: normal;">$pay_info</p>
php;

        // 注文完了メールにメッセージを追加
        $this->Order->appendCompleteMailMessage($complete_mail_message);
        // 注文完了画面にメッセージを追加
        $this->Order->appendCompleteMessage($complete_message);
    }

    /**
     * チェックするレスポンスパラメータのキーを取得
     *
     * @return array
     */
    function getCheckParameter()
    {
        return ['contract_code', 'trans_code', 'order_number', 'user_id', 'state', 'payment_code'];
    }


}

 ?>
