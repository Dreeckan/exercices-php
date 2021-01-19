<?php

declare(strict_types=1);

namespace Device;

abstract class  AbstractDevice
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $brand;

    public function getName()
    {
        return $this->name;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;
    }
}
