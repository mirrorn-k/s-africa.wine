<?php

namespace Plugin\GmoEpsilon4\Service\Method;

use Plugin\GmoEpsilon4\Service\Method\GmoEpsilon;

class Netbank_Rakuten extends GmoEpsilon
{

    public function init() {
        $this->st_code = $this->eccubeConfig['gmo_epsilon']['st_code']['netbank_rakuten'];
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
