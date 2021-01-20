<?php

namespace Device;

use Interfaces\HasBrandInterface;
use Interfaces\HasNameInterface;

abstract class AbstractDevice implements HasNameInterface, HasBrandInterface
{
    /** @var string */
    protected $brand = '';

    /** @var string */
    protected $name = '';

    /**
     * @return string|null
     */
    public function getBrand(): ?string
    {
        return $this->brand;
    }

    /**
     * @param string|null $brand
     *
     * @return HasBrandInterface
     */
    public function setBrand(?string $brand): HasBrandInterface
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     *
     * @return HasNameInterface
     */
    public function setName(?string $name): HasNameInterface
    {
        $this->name = $name;

        return $this;
    }
}