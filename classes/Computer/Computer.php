<?php

namespace Computer;

abstract class Computer
{

    // COMPONENTS

    /**
   * @var array
   */
    protected $components;// Crée la propriété components

    /**
     * Get the value of component
     *
     * @return  array
     */
    public function getComponents()
    {
        return $this->components;
    }

    /**
     * Set the value of component
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

    //DEVICES
    /**
   * @var array
   */
    protected $devices; // Crée la propriété devices

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



    //NAME
    /**
   * @var string
   */
    protected $name;// Crée la propriété name

    /**
     * Get the value of name
     *
     * @return  string
     */
    public function getName()
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
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }
}
