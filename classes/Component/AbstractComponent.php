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

    /**
     * @var string
     *
     * @return string
     */
    public function setName($name)
    {
        return $this->name = $name;
    }

    /**
     * @var string
     *
     * @return string
     */

    public function setBrand($brand)
    {
        return $this->brand = $brand;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }
}
