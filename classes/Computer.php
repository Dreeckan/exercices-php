<?php

use Interfaces\HasNameInterface;
use Traits\HasNameTrait;


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

    public function getComponents()
    {
        return $this->components;
    }

    public function setComponents($c)
    {
        $this->components = $c;
        return $this;
    }

    public function getDevices()
    {
        return $this->devices;
    }

    public function setDevices($d)
    {
        $this->devices = $d;
        return $this;
    }
}
