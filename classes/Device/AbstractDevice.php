<?php

namespace Device;

use Interfaces\HasBrandInterface;
use Interfaces\HasNameInterface;

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

    public function setName(?string $n): HasNameInterface
    {
        $this->name = $n;

        return $this;
    }

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand(?string $b): HasBrandInterface
    {
        $this->brand = $b;
        return $this;
    }
}
