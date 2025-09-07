<?php

namespace Plugin\GmoEpsilon4\Entity;

use Eccube\Annotation\EntityExtension;
use Doctrine\ORM\Mapping as ORM;

/**
 * @EntityExtension("Eccube\Entity\Order")
 */
trait OrderTrait
{

    /**
     * @var string
     *
     * @ORM\Column(name="trans_code", type="string", length=255, nullable=true)
     */
    private $trans_code;

    /**
     * @ORM\Column(name="gmo_epsilon_order_no", type="string", length=255, nullable=true)
     */
    private $gmo_epsilon_order_no;

    /**
     * {@inheritdoc}
     */
    public function setTransCode($transCode)
    {
        $this->trans_code = $transCode;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getTransCode()
    {
        return $this->trans_code;
    }

    public function getGmoEpsilonOrderNo()
    {
        return $this->gmo_epsilon_order_no;
    }

    public function setGmoEpsilonOrderNo($gmo_epsilon_order_no = null)
    {
        $this->gmo_epsilon_order_no = $gmo_epsilon_order_no;

        return $this;
    }

}
