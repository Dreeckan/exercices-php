<?php

use Interfaces\HasNameInterface;
use Traits\HasNameTrait;

abstract class Computer implements HasNameInterface
{
    /**
    * @var array
    */
    protected $components;

    /**
     * @var array
     */
    protected $devices;

    use HasNameTrait;

    public function getComponent()
    {
        return $this->components;
    }
    public function getDevices()
    {
        return $this->devices;
    }

    public function setComponents($components)
    {
        $this->components = $components;
    }
    public function setDevices($devices)
    {
        $this->devices = $devices;
    }
}
