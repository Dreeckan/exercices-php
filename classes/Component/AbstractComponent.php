<?php

namespace Component;

use Interfaces\HasNameInterface;
use Interfaces\HasBrandInterface;

abstract class AbstractComponent implements HasNameInterface, HasBrandInterface
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
     * @var string
     *
     * @return string
     */
    public function setName(?string $name): HasNameInterface
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @var string
     *
     * @return string
     */

    public function setBrand(?string $brand): HasBrandInterface
    {
        $this->brand = $brand;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getBrand(): ?string
    {
        return $this->brand;
    }
}
