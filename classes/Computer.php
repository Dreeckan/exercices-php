<?php

class Computer
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var array
     */
    protected $components;

    /**
     * @var array
     */
    protected $devices;

    // met à jour le contenu de la propriété `name` à partir de la variable `$name`

    /**
     * @return string
     */
    public function setName($name)
    {
        return $this->name = $name;
    }

    // met à jour le contenu de la propriété `components` à partir de la variable `$components`

    /**
     * @return array
     */
    public function setComponents($components)
    {
        return $this->components = $components;
    }

    // met à jour le contenu de la propriété `devices` à partir de la variable `$devices`

    /**
     * @return array
     */
    public function setDevices($devices)
    {
        return $this->devices = $devices;
    }

    // renvoie le contenu de la propriété `components`

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    // renvoie le contenu de la propriété `components`

    /**
     * @return array
     */
    public function getComponents()
    {
        return $this->components;
    }


    // renvoie le contenu de la propriété `components`

    /**
     * @return array
     */
    public function getDevices()
    {
        return $this->devices;
    }
}
