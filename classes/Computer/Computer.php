<?php
namespace Computer;

use Interfaces\HasNameInterface;
use Interfaces\HasBrandInterface;

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

    /**
     * @var string
     */

    protected $name;

    /**
     * Get the value of components
     */
    public function getComponents()
    {
        return $this->components;
    }

    /**
     * Set the value of components
     *
     * @return  self
     */
    public function setComponents($components)
    {
        $this->components = $components;

        return $this;
    }

    /**
     * Get the value of devices
     */
    public function getDevices()
    {
        return $this->devices;
    }

    /**
     * Set the value of devices
     *
     * @return  self
     */
    public function setDevices($devices)
    {
        $this->devices = $devices;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName(?string $name): HasNameInterface
    {
        $this->name = $name;

        return $this;
    }
}
