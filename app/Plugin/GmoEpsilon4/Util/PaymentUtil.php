<?php

namespace Plugin\GmoEpsilon4\Util;

use Eccube\Common\EccubeConfig;

/**
 * 決済モジュール用 汎用関数クラス
 */
class PaymentUtil
{

    public function __construct(
        EccubeConfig $eccubeConfig
    ) {
        $this->eccubeConfig = $eccubeConfig;
    }

    /**
     * 決済モジュールで利用出来る決済方式の名前一覧を取得する
     *
     * @param integer $tokenOption : 1 = use token, 0 = use credit
     * @return array 支払方法
     */
    function getPayments()
    {
        $payments = [];

        foreach ($this->eccubeConfig['gmo_epsilon']['pay_id'] as $pay_name => $pay_id) {
            $payments[$pay_id] = $this->eccubeConfig['gmo_epsilon']['pay_name'][$pay_name];
        }

        return $payments;
    }

    /**
     * 決済モジュールで利用できるコンビニの名前一覧を取得する
     * @return array コンビニ名
     */
    function getConvenienceNames()
    {
        $conveniences = [];

        foreach ($this->eccubeConfig['gmo_epsilon']['conveni_id'] as $conveni_name => $conveni_id) {
            $conveniences[$conveni_id] = $this->eccubeConfig['gmo_epsilon']['conveni_name'][$conveni_name];
        }

        return $conveniences;
    }

    /**
     * SSLバージョン情報の一覧を取得
     * @return array
     */
    function getSSLVersions()
    {
    	$sslVersions = [
            $this->eccubeConfig['gmo_epsilon']['ssl']['version_id']['default'] => $this->eccubeConfig['gmo_epsilon']['ssl']['version_name']['default'],
            $this->eccubeConfig['gmo_epsilon']['ssl']['version_id']['tls1'] => $this->eccubeConfig['gmo_epsilon']['ssl']['version_name']['tls1'],
            $this->eccubeConfig['gmo_epsilon']['ssl']['version_id']['ssl2'] => $this->eccubeConfig['gmo_epsilon']['ssl']['version_name']['ssl2'],
            $this->eccubeConfig['gmo_epsilon']['ssl']['version_id']['ssl3'] => $this->eccubeConfig['gmo_epsilon']['ssl']['version_name']['ssl3'],
            $this->eccubeConfig['gmo_epsilon']['ssl']['version_id']['tls1_1'] => $this->eccubeConfig['gmo_epsilon']['ssl']['version_name']['tls1_1'],
            $this->eccubeConfig['gmo_epsilon']['ssl']['version_id']['tls1_2'] => $this->eccubeConfig['gmo_epsilon']['ssl']['version_name']['tls1_2'],
        ];

    	return $sslVersions;
    }

    /**
     * レスポンスパラメータorder_numberから受注番号を取得
     * @var order_number 受注番号xリクエスト日時 (ex. 12345x20190301)
     * @return integer
     */
    function getOrderId($order_number)
    {
        if (empty($order_number)) {
            return null;
        } else if (is_numeric($order_number)) {
            return $order_number;
        } else{
            \preg_match('/(\d+)x(\d+)/', $order_number, $matchs);

            return $matchs[1];
        }
    }
}
