<?php

abstract class Computer
{
    /**
    * @var array
    * */
    protected $components;

    /**
    * @var array
    * */
    protected $devices;

    /**
    * @var string
    * */
    protected $name;

    public function getComponent()
    {
        return $this->components;
    }

    public function getDevices()
    {
        return $this->devices;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setComponents($components)
    {
        $this->components = $components;
    }

    public function setDevices($devices)
    {
        $this->devices = $devices;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}