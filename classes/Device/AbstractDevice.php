<?php

declare(strict_types=1);

namespace Device;

use Interfaces\HasBrandInterface;
use Interfaces\HasNameInterface;

abstract class  AbstractDevice implements HasNameInterface, HasBrandInterface
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

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setName(?string $name): HasNameInterface
    {
        $this->name = $name;

        return $this;
    }

    public function setBrand(?string $brand): HasBrandInterface
    {
        $this->brand = $brand;

        return $this;
    }
}
