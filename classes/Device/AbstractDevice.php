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



    /**
     * Get the value of name
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName(?string $name): HasNameInterface
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of brand
     */
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
};