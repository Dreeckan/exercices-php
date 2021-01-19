<?php

namespace Device;

abstract class AbstractDevice
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

    public function setName($nL)
    {
        $this->name = $nL;
    }

    public function getBrand()
    {
        return $this->devices;
    }

    public function setBrand($b)
    {
        $this->devices = $b;
    }
}
