<?php

namespace Computer;

use Exception;
use Interfaces\HasNameInterface;
use Interfaces\HasIdInterface;
use Traits\HasNameTrait;
use JsonSerializable;
use Traits\HasIdTrait;

abstract class AbstractComputer implements HasNameInterface, JsonSerializable, HasIdInterface
{
    use HasNameTrait;
    use HasIdTrait;

    /**
     * @var array
     */
    protected $listDevices = [];

    /**
     * @var array
     */
    protected $listComponents = [];


    // ajoute un component et vérifie sa compatibilité, lance une exception si non compatible et donc n'ajoute pas le component non valide

    /**
     * @var object
     *
     * @return array
     */

    public function setComponents($component)
    {
        $check = $component->isCompatibleWith(get_class($this));
        if (!$check) {
            throw new Exception("Le composant ".$component->getName()." n'est pas compatible"."<br>");
        }

        $this->listComponents[get_class($component)] = $component;
        return $this;
    }

    // ajoute un device et vérifie sa compatibilité, lance une exception si non compatible et donc n'ajoute pas le device non valide


    /**
     * @var object
     *
     * @return array
     */

    public function setDevices($device)
    {
        $check = $device->isCompatibleWith(get_class($this));
        if (!$check) {
            throw new Exception("Le périphérique ".$device->getName()." n'est pas compatible"."<br>");
        }

        $this->listDevices[get_class($device)] = $device;
        // laissé comme ça, on ne peut avoir qu'un composant de même type, sinon remplace vu que même nom, si on veut contrer ça alors laisser []
        return $this;
    }


    // renvoie le contenu de la propriété `listComponents`

    /**
     * @return array
     */
    public function getComponents()
    {
        return $this->listComponents;
    }


    // renvoie le contenu de la propriété `listDevices`

    /**
     * @return array
     */
    public function getDevices()
    {
        return $this->listDevices;
    }

    public function jsonSerialize(): array
    {
        return [
            "name" => $this->getName(),
            "components" => $this->getComponents(),
            "devices" => $this->getDevices(),
        ];
    }
}
