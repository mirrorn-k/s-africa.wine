<?php

namespace Plugin\GmoEpsilon4\Service\Method;

use Eccube\Entity\Master\OrderStatus;
use Eccube\Service\PurchaseFlow\PurchaseContext;
use Eccube\Service\Payment\PaymentResult;
use Plugin\GmoEpsilon4\Service\Method\GmoEpsilon;

class Maillink extends GmoEpsilon
{

    public $payment_code;

    public function init() {
    }

    public function apply()
    {
        $this->purchaseFlow->prepare($this->Order, new PurchaseContext());

        return false;
    }

    public function checkout()
    {
        $this->purchaseFlow->commit($this->Order, new PurchaseContext());

        $this->updateOrder();

        $result = new PaymentResult();
        $result->setSuccess(true);

        return $result;
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
    }

    public function compProcess()
    {
        $arrPaymentMethod = array_flip($this->eccubeConfig['gmo_epsilon']['pay_id']);
        switch ($arrPaymentMethod[$this->payment_code]) {
            case 'conveni':
            case 'payeasy':
                $OrderStatus = $this->orderStatusRepository->find(OrderStatus::IN_PROGRESS);
                break;
            default:
                $OrderStatus = $this->orderStatusRepository->find(OrderStatus::NEW);
                break;
        }

        $this->Order->setOrderStatus($OrderStatus);
        $this->Order->setPaymentDate(new \DateTime());

        // トランザクションコードを登録
        $this->Order->setTransCode($this->request->get('trans_code'));

        // メール送信
        $MailHistory = $this->mailService->sendOrderMail($this->Order);

        logs('gmo_epsilon')->info('pay process end for maillink. order_id = ' . $this->Order->getId());
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
