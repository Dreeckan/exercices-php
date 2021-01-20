<?php

use Interfaces\HasNameInterface, Traits\HasNameTrait;

abstract class Computer implements HasNameInterface
 {

    use HasNameTrait;

    /**
     * @var array
     */
    protected $components = [];

    /**
     * @var array
     */
    protected $devices = [];


    /**
     * Get the value of components
     *
     * @return  array
     */ 
    public function getComponents()
    {
        return $this->components;
    }

    /**
     * Set the value of components
     *
     * @param  array  $components
     *
     * @return  self
     */ 
    public function setComponents(array $components)
    {
        $this->components = $components;

        return $this;
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

};

