<?php

namespace Device;

use Interfaces\HasNameInterface;

abstract class AbstractDevice implements HasNameInterface
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

    public function getBrand()
    {
        return $this->brand;
    }

    public function setBrand(?string $b)
    {
        $this->brand = $b;
        return $this;
    }
}
