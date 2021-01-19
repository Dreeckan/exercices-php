<?php

namespace Device;

abstract class AbstractDevice
{
    /**
     * @var string
     */
    public $brand;

    /**
     * Get the value of brand
     *
     * @return  string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set the value of brand
     *
     * @param  string  $brand
     *
     * @return  self
     */
    public function setBrand(string $brand)
    {
        $this->brand = $brand;

        return $this;
    }


    
    /**
     * @var string
     */
    public $name;


    /**
     * Get the value of name
     *
     * @return  string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param  string  $name
     *
     * @return  self
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }
}
