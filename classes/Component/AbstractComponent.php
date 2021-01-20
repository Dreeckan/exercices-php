<?php

namespace Component;

use Interfaces\HasNameInterface;
use Interfaces\HasBrandInterface;

abstract class AbstractComponent implements HasNameInterface, HasBrandInterface
{
    /** @var string */
    protected $name = '';

    /** @var string */
    protected $brand = '';

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
     * @return self
     */
    public function setName(?string $name): HasNameInterface
    {
        $this->name = $name;

        return $this;
    }

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
     * @return self
     */
    public function setBrand(?string $brand): HasBrandInterface
    {
        $this->brand = $brand;

        return $this;
    }
}