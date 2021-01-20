<?php

namespace Device;

use Interfaces\HasNameInterface;
use Interfaces\HasBrandInterface;

abstract class AbstractDevice implements HasNameInterface, HasBrandInterface
{
    /**
    * @var string
    */
    protected $name;

    /**
     * @var string
     */
    protected $brand;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $nL): HasNameInterface
    {
        $this->name = $nL;
        return $this;
    }

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
