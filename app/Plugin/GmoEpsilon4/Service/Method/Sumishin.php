<?php

namespace Plugin\GmoEpsilon4\Service\Method;

use Plugin\GmoEpsilon4\Service\Method\GmoEpsilon;

class Sumishin extends GmoEpsilon
{

    public function init() {
        $this->st_code = $this->eccubeConfig['gmo_epsilon']['st_code']['sumishin'];
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
