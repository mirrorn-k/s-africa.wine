<?php

namespace Plugin\TaxManagement\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Config
 *
 * @ORM\Table(name="plg_tax_management_config")
 * @ORM\Entity(repositoryClass="Plugin\TaxManagement\Repository\ConfigRepository")
 */
class Config
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
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @var boolean
     *
     * @ORM\Column(name="discount_rate_flag", type="boolean", options={"default":false})
     */
    private $discount_rate_flag;

    /**
     * @var boolean
     *
     * @ORM\Column(name="include_tax_flag", type="boolean", options={"default":true})
     */
    private $include_tax_flag;

    /**
     * @return bool
     */
     public function isDiscountRateFlag(): bool
    {
        return $this->discount_rate_flag === true;
    }
 
    /**
    * @param bool $discount_rate_flag
    */
    public function setDiscountRateFlag($discount_rate_flag)
    {
        $this->discount_rate_flag = $discount_rate_flag;
    }

    /**
    * @return bool
    */
    public function getDiscountRateFlag()
    {
        return $this->discount_rate_flag;
    }

    /**
     * @return bool
     */
     public function isIncludeTaxFlag(): bool
    {
        return $this->include_tax_flag === true;
    }
 
    /**
    * @param bool $include_tax_flag
    */
    public function setIncludeTaxFlag($include_tax_flag)
    {
        $this->include_tax_flag = $include_tax_flag;
    }

    /**
    * @return bool
    */
    public function getIncludeTaxFlag()
    {
        return $this->include_tax_flag;
    }
}
