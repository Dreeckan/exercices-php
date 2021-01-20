<?php
namespace Traits;

use Interfaces\HasBrandInterface;

trait HasBrandTrait{
        /**
     * @var string
     */
    protected $brand = '';

    /**
     * Get the value of brand
     *
     * @return  string
     */ 
    public function getBrand(): ?string
    {
        return $this->brand;
    }

    /**
     * Set the value of brand
     *
     * @param  string  $brand
     *
     * @return  self
     */ 
    public function setBrand(?string $brand):HasBrandInterface
    {
        $this->brand = $brand;

        return $this;
    }
}