<?php

namespace Plugin\GmoEpsilon4\Service\Method;

use Eccube\Entity\Master\OrderStatus;
use Eccube\Service\PurchaseFlow\PurchaseContext;
use Eccube\Service\Payment\PaymentResult;
use Plugin\GmoEpsilon4\Form\Type\ConvenienceType;
use Plugin\GmoEpsilon4\Service\Method\GmoEpsilon;
use Symfony\Component\HttpFoundation\Response;

class Conveni extends GmoEpsilon
{
    public function init() {
        $this->st_code = $this->eccubeConfig['gmo_epsilon']['st_code']['conveni'];
    }

    public function apply()
    {
        $this->purchaseFlow->prepare($this->Order, new PurchaseContext());

        return false;
    }

    public function checkout()
    {
        $result = new PaymentResult();

        logs('gmo_epsilon')->info('pay conveni process start. order_id = ' . $this->Order->getId());

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

            $result->setSuccess(false);
            $messages = array(trans('gmo_epsilon.front.shopping.error'));
            $messages = array_merge($messages, (array)$err_detail);
            $result->setErrors($messages);
        } else {

            $pay_info = $this->getPaymentInfo($arrXML);
            $this->setOrderCompleteMessages($pay_info);

            $this->Order->setTransCode($this->gmoEpsilonRequestService->getXMLValue($arrXML,'RESULT','TRANS_CODE'));
            $this->Order->setGmoEpsilonOrderNo($this->gmoEpsilonRequestService->getXMLValue($arrXML,'RESULT','ORDER_NUMBER'));

            // 受注ステータスを新規受付へ変更
            $OrderStatus = $this->orderStatusRepository->find(OrderStatus::NEW);
            $this->Order->setOrderStatus($OrderStatus);
            $this->purchaseFlow->commit($this->Order, new PurchaseContext());

            $result->setSuccess(true);
        }

        return $result;
    }

    /**
     * リクエストパラメータを設定
     *
     * @param \Eccube\Entity\Order $Order
     * @return array
     */
    function setParameter($Order)
    {
        // 共通のリクエストパラメータを取得
        $arrParameter = parent::setParameter($Order);

        // 選択されたコンビニIDを取得
        $formName = $this->form->getName();
        $listParam = $_POST[$formName];

        // コンビニ決済用のリクエストパラメータを設定
        $arrConveniParameter = [
            'conveni_code' => $listParam['convenience'],
            'user_tel'     => $Order->getPhoneNumber(),
            'haraikomi_mail' => 0,
        ];

        return array_merge($arrParameter, $arrConveniParameter);
    }

    /**
     * 決済情報を取得
     * @param array arrXML
     * @return String pay_info
     */
    function getPaymentInfo($arrXML)
    {
        // リクエスト結果を取得
        $conveni_code = $this->gmoEpsilonRequestService->getXMLValue($arrXML, 'RESULT', 'CONVENI_CODE');
        $receipt_no = $this->gmoEpsilonRequestService->getXMLValue($arrXML,'RESULT','RECEIPT_NO');
        $payment_url = $this->gmoEpsilonRequestService->getXMLValue($arrXML,'RESULT','HARAIKOMI_URL');
        $company_code = $this->gmoEpsilonRequestService->getXMLValue($arrXML,'RESULT','KIGYOU_CODE');
        $tel = $this->Order->getPhoneNumber();
        $payment_limit = $this->gmoEpsilonRequestService->getXMLValue($arrXML,'RESULT','CONVENI_LIMIT');

        // コンビニ別に決済情報を設定
        $pay_info = '';
        switch ($conveni_code) {
            case $this->eccubeConfig['gmo_epsilon']['conveni_id']['seveneleven']:
                $pay_info .= $this->eccubeConfig['gmo_epsilon']['conveni_pre_message']['seveneleven']."\n\n";

                $pay_info .= "払込票URL:$payment_url\n";
                $pay_info .= "払込票番号（13桁）:$receipt_no\n";
                $pay_info .= "お支払期限:$payment_limit\n\n";

                $pay_info .= $this->eccubeConfig['gmo_epsilon']['conveni_message']['seveneleven']."\n\n";
                break;
            case $this->eccubeConfig['gmo_epsilon']['conveni_id']['familymart']:
                $pay_info .= $this->eccubeConfig['gmo_epsilon']['conveni_pre_message']['familymart']."\n\n";

                $pay_info .= "企業コード（5桁）:$company_code\n";
                $pay_info .= "注文番号（12桁）:$receipt_no\n";
                $pay_info .= "お支払期限:$payment_limit\n\n";

                $pay_info .= $this->eccubeConfig['gmo_epsilon']['conveni_message']['familymart']."\n\n";
                break;
            case $this->eccubeConfig['gmo_epsilon']['conveni_id']['lawson']:
                $pay_info .= $this->eccubeConfig['gmo_epsilon']['conveni_pre_message']['lawson']."\n\n";

                $pay_info .= "受付番号（6桁）:$receipt_no\n";
                $pay_info .= "電話番号:$tel\n";
                $pay_info .= "お支払期限:$payment_limit\n\n";

                $pay_info .= $this->eccubeConfig['gmo_epsilon']['conveni_message']['lawson']."\n\n";
                break;
            case $this->eccubeConfig['gmo_epsilon']['conveni_id']['seicomart']:
                $pay_info .= $this->eccubeConfig['gmo_epsilon']['conveni_pre_message']['seicomart']."\n\n";

                $pay_info .= "受付番号（6桁）:$receipt_no\n";
                $pay_info .= "電話番号:$tel\n";
                $pay_info .= "お支払期限:$payment_limit\n\n";

                $pay_info .= $this->eccubeConfig['gmo_epsilon']['conveni_message']['seicomart']."\n\n";
                break;
            case $this->eccubeConfig['gmo_epsilon']['conveni_id']['ministop']:
                $pay_info .= $this->eccubeConfig['gmo_epsilon']['conveni_pre_message']['ministop']."\n\n";

                $pay_info .= "払込票番号:$receipt_no\n";
                $pay_info .= "電話番号:$tel\n";
                $pay_info .= "お支払期限:$payment_limit\n\n";

                $pay_info .= $this->eccubeConfig['gmo_epsilon']['conveni_message']['ministop']."\n\n";
                break;
        }

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
        　コンビニ決済情報
        ************************************************
        $pay_info
php;

        // URLをリンクに変換
        $pay_info = preg_replace("/(http.*?)\\n/", "<a href='#' onClick=\"window.open('$1'); return false;\" >$1</a>\n", $pay_info);
        $pay_info = nl2br($pay_info, false);

        $complete_message = <<<php
        <div class="ec-rectHeading">
            <h2>■コンビニ決済情報</h2>
        </div>
        <p style="text-align:left; word-wrap: break-word; white-space: normal;">$pay_info</p>
php;

        // 注文完了メールにメッセージを追加
        $this->Order->appendCompleteMailMessage($complete_mail_message);
        // 注文完了画面にメッセージを追加
        $this->Order->appendCompleteMessage($complete_message);
    }

}

 ?>
