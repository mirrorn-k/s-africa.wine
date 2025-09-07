<?php

namespace Plugin\GmoEpsilon4\Service\Method;

use Plugin\GmoEpsilon4\Service\Method\GmoEpsilon;

class Chocom extends GmoEpsilon
{

    public function init() {
        $this->st_code = $this->eccubeConfig['gmo_epsilon']['st_code']['chocom'];
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
