<?php

namespace Component;

abstract class AbstractComponent
{
    /** @var string */
    protected $name = '';

    /** @var string */
    protected $brand = '';

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * @param string $brand
     *
     * @return self
     */
    public function setBrand(string $brand): self
    {
        $this->brand = $brand;

        return $this;
    }
}