<?php

abstract class Computer
{
    /**
   * @var array
   */

    protected $composents;
    /**
   * @var array
   */

    protected $devices;
    /**
   * @var string
   */

    protected $name;

    public function __construct(
        $composents = [],
        $devices = [],
        $name = 'default'
    ) {
        $this->composents = $composents;
        $this->devices = $devices;
        $this->name = $name;
    }
    //GETTERS
    public function getComponents()
    {
        return  $this->composents;
    }
    public function getDevices()
    {
        return $this->devices;
    }
    public function getName()
    {
        $this->name;
    }
    //SETTERS
    public function setComponents($composents)
    {
        $this->composents = $composents;
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
