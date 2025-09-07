<?php

namespace Plugin\GmoEpsilon4\Entity;

use Doctrine\ORM\Mapping as ORM;
use Eccube\Entity\AbstractEntity;
use Plugin\GmoEpsilon4\Entity\UseConvenience;

/**
 * Config
 * 
 * @ORM\Table(name="plg_gmo_epsilon_config")
 * @ORM\Entity(repositoryClass="Plugin\GmoEpsilon4\Repository\ConfigRepository")
 */
class Config extends AbstractEntity
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
     * @var string
     * 
     * @ORM\Column(name="contract_code", type="string", length=255, nullable=true)
     */
    private $contract_code;

    /**
     * @var string
     * 
     * @ORM\Column(name="destination_url", type="string", length=255, nullable=true)
     */
    private $destination_url;

    /**
     * @var string
     * 
     * @ORM\Column(name="info_conf_url", type="string", length=255, nullable=true)
     */
    private $info_conf_url;

    /**
     * @var integer
     * 
     * @ORM\Column(name="ssl_version", type="integer", nullable=true)
     */
    private $ssl_version;

    /**
     * @var string
     * 
     * @ORM\Column(name="use_payment", type="string", length=1024, nullable=true)
     */
    private $use_payment;

    /**
     * @var string
     * 
     * @ORM\Column(name="use_convenience", type="string", length=1024, nullable=true)
     */
    private $use_convenience;

    /**
     * @var integer
     * 
     * @ORM\Column(name="block_mode", type="integer", nullable=true)
     */
    private $block_mode;

    /**
     * @var integer
     * 
     * @ORM\Column(name="access_frequency_time", type="integer", nullable=true)
     */
    private $access_frequency_time;

    /**
     * @var integer
     * 
     * @ORM\Column(name="access_frequency", type="integer", nullable=true)
     */
    private $access_frequency;

    /**
     * @var integer
     * 
     * @ORM\Column(name="block_time", type="integer", nullable=true)
     */
    private $block_time;

    /**
     * @var string
     * 
     * @ORM\Column(name="white_list", type="text", nullable=true)
     */
    private $white_list;

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
    public function getContractCode()
    {
        return $this->contract_code;
    }

    /**
     * {@inheritdoc}
     */
    public function setContractCode($contract_code)
    {
        $this->contract_code = $contract_code;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getDestinationUrl()
    {
        return $this->destination_url;
    }

    /**
     * {@inheritdoc}
     */
    public function setDestinationUrl($destination_url)
    {
        $this->destination_url = $destination_url;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getInfoConfUrl()
    {
        return $this->info_conf_url;
    }

    /**
     * {@inheritdoc}
     */
    public function setInfoConfUrl($info_conf_url)
    {
        $this->info_conf_url = $info_conf_url;

        return $this;
    }
    
    /**
     * {@inheritdoc}
     */
    public function getSslVersion()
    {
        return $this->ssl_version;
    }

    /**
     * {@inheritdoc}
     */
    public function setSslVersion($ssl_version)
    {
        $this->ssl_version = $ssl_version;

        return $this;
    }

        /**
     * {@inheritdoc}
     */
    public function getUsePayment()
    {
        return $this->use_payment;
    }

    /**
     * {@inheritdoc}
     */
    public function setUsePayment($use_payment)
    {
        $this->use_payment = $use_payment;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getUseConvenience()
    {
        return $this->use_convenience;
    }

    /**
     * {@inheritdoc}
     */
    public function setUseConvenience($use_convenience)
    {
        $this->use_convenience = $use_convenience;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockMode()
    {
        return $this->block_mode;
    }

    /**
     * {@inheritdoc}
     */
    public function setBlockMode($block_mode)
    {
        $this->block_mode = $block_mode;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAccessFrequencyTime()
    {
        return $this->access_frequency_time;
    }

    /**
     * {@inheritdoc}
     */
    public function setAccessFrequencyTime($access_frequency_time)
    {
        $this->access_frequency_time = $access_frequency_time;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAccessFrequency()
    {
        return $this->access_frequency;
    }

    /**
     * {@inheritdoc}
     */
    public function setAccessFrequency($access_frequency)
    {
        $this->access_frequency = $access_frequency;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockTime()
    {
        return $this->block_time;
    }

    /**
     * {@inheritdoc}
     */
    public function setBlockTime($block_time)
    {
        $this->block_time = $block_time;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getWhiteList()
    {
        return $this->white_list;
    }

    /**
     * {@inheritdoc}
     */
    public function setWhiteList($white_list)
    {
        $this->white_list = $white_list;

        return $this;
    }

}
