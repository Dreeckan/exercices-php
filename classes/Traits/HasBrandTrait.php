<?php

namespace Traits;

use Interfaces\HasBrandInterface;

trait HasBrandTrait
{

    /*
     * @var string
     */
    protected $brand;

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand($b): HasBrandInterface
    {
        $this->brand = $b;
        return $this;
    }
}
