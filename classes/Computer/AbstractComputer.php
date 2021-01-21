<?php

namespace Computer;

use Interfaces\HasNameInterface;
use Traits\HasNameTrait;
use JsonSerializable;

abstract class AbstractComputer implements HasNameInterface, JsonSerializable
{
    use HasNameTrait;

    /**
     * @var array
     */
    protected $components;

    /**
     * @var array
     */
    protected $devices;


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

    public function jsonSerialize(): array
    {
        return [
            "name" => $this->getName(),
            "components" => $this->getComponents(),
            "devices" => $this->getDevices()
        ];
    }
}
