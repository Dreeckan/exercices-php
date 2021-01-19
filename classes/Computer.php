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

    public function components()
    {
        return $this->components;
    }

    public function devices()
    {
        return $this->devices;
    }

    public function name()
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
