<?php

use Interfaces\HasNameInterface;

abstract class Computer implements HasNameInterface
 {

    /**
     * @var array
     */
    protected $components = [];

    /**
     * @var array
     */
    protected $devices = [];

    /**
     * @var string
     */
    protected $name = '';


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

