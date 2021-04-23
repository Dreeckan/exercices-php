<?php

namespace Device;

abstract class AbstractDevice
{
    /** @var string */
    protected $brand = '';

    /** @var string */
    protected $name = '';

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
     * @return AbstractDevice
     */
    public function setBrand(string $brand): AbstractDevice
    {
        $this->brand = $brand;

        return $this;
    }

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
     * @return AbstractDevice
     */
    public function setName(string $name): AbstractDevice
    {
        $this->name = $name;

        return $this;
    }
}