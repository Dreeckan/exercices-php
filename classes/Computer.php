<?php

class Computer
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
    protected $name;

    public function getComponents()
    {
        return $this->components;
    }

    public function setComponents($c)
    {
        $this->components = $c;
    }

    public function getDevices()
    {
        return $this->devices;
    }

    public function setDevices($d)
    {
        $this->devices = $d;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($n)
    {
        $this->name = $n;
    }
}
