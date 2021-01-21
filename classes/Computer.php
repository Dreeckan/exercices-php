<?php

use Interfaces\HasNameInterface;
use Traits\HasNameTrait;
use \JsonSerializable;

abstract class Computer implements HasNameInterface, JsonSerializable
{
    use HasNameTrait;
    
    
    /** * @var array */
    protected $devices = [];

    /** * @var array */
    protected $components = [];

    //GETTERS renvoie le contenu de la propriété
    public function getComponents(): array
    {
        return $this->components;
    }
    public function getDevices(): array
    {
        return $this->devices;
    }
   
    //SETTERS définir / modifier / mettre à jour la propriété
    public function setComponents($components)
    {
        return $this->components = $components;
    }

    public function setDevices($devices)
    {
        return $this->devices = $devices;
    }

    public function jsonSerialize()
    {
        return [
            'computer' => [
                'components' => $this->components,
                'devices' => $this->devices
            ]
        ];
    }
}
