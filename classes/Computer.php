<?php

use interfaces\HasNameInterface;

abstract class Computer implements HasNameInterface {

    /**
     * @var array
     */
    protected $components = [];

    /**
     *  @var array 
     */
    protected $devices = [];

    /**
     * @var string
     */
    protected $name = ""; 

public function getComponents()
{
    return $this->components;
} 

public function setComponents(array $c)
{
    $this->components = $c;
}


    /**
     * Get the value of devices
     *
     * @return  array
     */ 
    public function getDevices()
    {
        return $this->devices;
    }

    /**
     * Set the value of devices
     *
     * @param  array  $devices
     *
     * @return  self
     */ 
    public function setDevices(array $devices)
    {
        $this->devices = $devices;

        return $this;
    }

    

    /**
     * Get the value of name
     *
     * @return  string
     */ 
    public function getName(): ?string
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
    public function setName(?string $name): HasNameInterface
    {
        $this->name = $name;

        return $this;
    }
};
