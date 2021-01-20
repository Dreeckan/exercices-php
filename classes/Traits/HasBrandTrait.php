<?php

namespace Traits;

use Interfaces\HasNameInterface;
use Interfaces\HasBrandInterface;

trait HasBrandTrait
{
    /**
    * @var string
    * */
    protected $brand;

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand(?string $brand): HasBrandInterface
    {
        $this->brand = $brand;

        return $this;
    }

}