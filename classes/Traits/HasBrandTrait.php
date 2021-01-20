<?php

namespace Traits;

trait HasBrandTrait
{
    public $brand;
    public function getBrand(): ?string
    {
        return $this->brand;
    }

    /**
     * Set the value of brand
     *
     * @return  self
     */
    public function setBrand(?string $brand): HasBrandInterface
    {
        $this->brand = $brand;

        return $this;
    }
}
