<?php

declare(strict_types=1);

namespace Component;

abstract class  AbstractComponent
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $brand;

    public function name()
    {
        return $this->name;
    }

    public function brand()
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
