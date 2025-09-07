<?php

namespace Plugin\GmoEpsilon4\Service\Method;

use Plugin\GmoEpsilon4\Service\Method\GmoEpsilon;

class Webmoney extends GmoEpsilon
{

    public function init() {
        $this->st_code = $this->eccubeConfig['gmo_epsilon']['st_code']['webmoney'];
    }

    /**
     * チェックするレスポンスパラメータのキーを取得
     *
     * @return array
     */
    function getCheckParameter()
    {
        return ['trans_code'];
    }


}

 ?>
