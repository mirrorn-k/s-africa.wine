<?php

namespace Plugin\GmoEpsilon4\Service\Method;

use Plugin\GmoEpsilon4\Service\Method\GmoEpsilon;

class Credit extends GmoEpsilon
{

    public function init() {
        $this->st_code = $this->eccubeConfig['gmo_epsilon']['st_code']['credit'];
    }

    /**
     * {@inheritdoc}
     */
    public function apply()
    {
        $dispatcher = $this->accessBlockProcess();

        // エラーがセットされていなければ正常処理を行う
        if (!$dispatcher->getResponse()) {
            $dispatcher = parent::apply();
        }

        return $dispatcher;
    }

    /**
     * チェックするレスポンスパラメータのキーを取得
     *
     * @return array
     */
    function getCheckParameter()
    {
        return ['trans_code', 'user_id', 'result', 'order_number'];
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

        // Shipping and order Info
        $Shipping = $Order->getShippings()[0];
        // Start specific params of 3ds 2.0
        $arr3DS2Parameter = [
            'tds_flag' => '21', // 3DS2.0フラ グ
            'billAddrCity' => $Order->getPref()->getName(), // 請求先住所(都市)
            'billAddrCountry' => 392, // 請求先住所(国番号) =>  set default is Japan
            'billAddrLine1' => $Order->getAddr01(), // 請求先住所(区域部分_1行目)
            'billAddrLine2' => $Order->getAddr02(), // 請求先住所(区域部分_2行目)
            'billAddrLine3' => '', // 請求先住所(区域部分_3行目)
            'billAddrPostCode' => $Order->getPostalCode(), // 請求先住所(郵便番号)
            'billAddrState' => $Order->getPref()->getId(), // 請求先住所 (州または都道府県番号)
            'shipAddrCity' => $Shipping->getPref()->getName(), // 送り先住所(都市)
            'shipAddrCountry' => 392, // 送り先住所(国番号) => set default is Japan
            'shipAddrLine1' => $Shipping->getAddr01(), // 送り先住所(区域部分_1行目)
            'shipAddrLine2' => $Shipping->getAddr02(), // 送り先住所(区域部分_2行目)
            'shipAddrLine3' => '', // 送り先住所(区域部分_3行目)
            'shipAddrPostCode' => $Shipping->getPostalCode(), // 送り先住所(郵便番号)
            'shipAddrState' => $Shipping->getPref()->getId(), // 送り先住所 (州または都道府県番号)
            'threeDSReqAuthMethod' => '02', // ログイ ン認証方法
            'challengeInd' => '04', // チャレンジ要求
        ];
        logs('gmo_epsilon')->info('Parameter sent 3DS 2.0 => ' . print_r(array_merge($arrParameter, $arr3DS2Parameter),true));
        // End sample specific params of 3ds 2.0
        return array_merge($arrParameter, $arr3DS2Parameter);
    }
    
}

 ?>
