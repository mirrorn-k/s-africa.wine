<?php

namespace Plugin\GmoEpsilon4\Entity;

use Doctrine\ORM\Mapping as ORM;
use Eccube\Entity\AbstractEntity;
use Plugin\GmoEpsilon4\Entity\UseConvenience;

/**
 * CreditAccessLog
 * 
 * @ORM\Entity
 * @ORM\Table(name="plg_gmo_epsilon_credit_access_log", indexes={
 *     @ORM\Index(name="dtb_epsilon_credit_access_logs_ip_address_key_idx", columns={"ip_address"})
 *  })
 */
class CreditAccessLog extends AbstractEntity
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
     * @ORM\Column(name="access_date", type="datetimetz")
     */
    private $access_date;

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
    public function getAccessDate()
    {
        return $this->access_date;
    }

    /**
     * {@inheritdoc}
     */
    public function setAccessDate($access_date)
    {
        $this->access_date = $access_date;

        return $this;
    }

}
