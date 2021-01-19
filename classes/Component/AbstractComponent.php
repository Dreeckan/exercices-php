<?php

namespace Component;

abstract class AbstractComponent
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

    public function setName($n)
    {
        $this->name = $n;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function setBrand($b)
    {
        $this->brand = $b;
    }
}
