<?php

namespace Plugin\GmoEpsilon4\Service\Method;

use Plugin\GmoEpsilon4\Service\Method\GmoEpsilon;
use Eccube\Entity\Master\OrderStatus;

class Deferred extends GmoEpsilon
{

    public function init() {
        $this->st_code = $this->eccubeConfig['gmo_epsilon']['st_code']['deferred'];
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

        $arrShippings = $Order->getShippings();
        $Shipping = $arrShippings[0];

        // GMO後払い決済のリクエストパラメータを設定
        $arrDeferredParameter = array(
                    'delivery_code' => '99',
                    'consignee_postal' => $Shipping->getPostalCode(),
                    'consignee_name' => $Shipping->getName01().$Shipping->getName02(),
                    'consignee_address' => $Shipping->getPref().$Shipping->getAddr01().$Shipping->getAddr02(),
                    'consignee_tel' => $Shipping->getPhonenumber(),
                    'orderer_postal' => $Order->getPostalCode(),
                    'orderer_name' => $Order->getName01().$Order->getName02(),
                    'orderer_address' => $Order->getPref().$Order->getAddr01().$Order->getAddr02(),
                    'orderer_tel' => $Order->getPhonenumber(),
        );
        $arrParameter = array_merge($arrParameter, $arrDeferredParameter);

        return $arrParameter;
    }

    /**
     * チェックするレスポンスパラメータのキーを取得
     *
     * @return array
     */
    function getCheckParameter()
    {
        return ['trans_code', 'order_number', 'user_id', 'state', 'payment_code'];
    }
}

 ?>
