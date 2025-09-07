<?php

namespace Plugin\GmoEpsilon4\Entity;

use Doctrine\ORM\Mapping as ORM;
use Eccube\Entity\AbstractEntity;
use Plugin\GmoEpsilon4\Entity\UseConvenience;

/**
 * CreditBlock
 * 
 * @ORM\Entity
 * @ORM\Table(name="plg_gmo_epsilon_credit_access_block", indexes={
 *     @ORM\Index(name="dtb_epsilon_credit_aceess_block_ip_address_key_idx", columns={"ip_address"})
 *  })
 */
class CreditBlock extends AbstractEntity
{

    /**
     * @var int
     * 
     * @ORM\Column(name="id", type="integer", options={"unsigned":true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     * 
     * @ORM\Column(name="ip_address", type="string", length=255, nullable=true)
     */
    private $ip_address;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="block_date", type="datetimetz")
     */
    private $block_date;

    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * {@inheritdoc}
     */
    public function getIpAddress()
    {
        return $this->ip_address;
    }

    /**
     * {@inheritdoc}
     */
    public function setIpAddress($ip_address)
    {
        $this->ip_address = $ip_address;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockDate()
    {
        return $this->block_date;
    }

    /**
     * {@inheritdoc}
     */
    public function setBlockDate($block_date)
    {
        $this->block_date = $block_date;

        return $this;
    }

}
