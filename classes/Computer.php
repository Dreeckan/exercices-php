<?php

declare(strict_types=1);

class Computer
{
    /**
     * @var array
     */
    protected $components;

    /**
     * @var array
     */
    protected $devices;

    /**
     * @var string
     */
    protected $name;

    /**
     * @param array $components
     */

    public function getComponents()
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
        $this->names = $name;
    }
}
