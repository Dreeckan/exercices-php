<?php

namespace Computer;

abstract class AbstractComputer
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
     * @var string
     *
     * @return string
     */

    public function setName($name)
    {
        return $this->name = $name;
    }

    // met à jour le contenu de la propriété `components` à partir de la variable `$components`

    /**
     * @var array
     *
     * @return array
     */

    public function setComponents($components)
    {
        return $this->components = $components;
    }

    // met à jour le contenu de la propriété `devices` à partir de la variable `$devices`

    /**
     * @var array
     *
     * @return array
     */

    public function setDevices($devices)
    {
        return $this->devices = $devices;
    }

    // renvoie le contenu de la propriété `name`

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


    // renvoie le contenu de la propriété `devices`

    /**
     * @return array
     */
    public function getDevices()
    {
        return $this->devices;
    }
}
