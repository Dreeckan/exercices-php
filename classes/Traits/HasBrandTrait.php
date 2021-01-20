<?php

namespace Traits;

use Interfaces\HasBrandInterface;

trait HasBrandTrait
{
    protected $brand;

    public function getBrand(): ?string
    {
        return $this->devices;
    }

    public function setBrand(?string $b): HasBrandInterface
    {
        $this->devices = $b;
        return $this;
    }
}
