<?php

namespace Computer;

use Exception;
use Interfaces\HasNameInterface;
use Interfaces\HasCompatibilityInterface;
use Traits\HasNameTrait;
use JsonSerializable;
use Traits\HasCompatibilityTrait;

abstract class AbstractComputer implements HasNameInterface, HasCompatibilityInterface, JsonSerializable
{
    use HasNameTrait;
    use HasCompatibilityTrait;

    /**
     * @var array
     */
    protected $listDevices = [];

    /**
     * @var array
     */
    protected $listComponents = [];


    // met à jour le contenu de la propriété `components` à partir de la variable `$components`

    /**
     * @var object
     *
     * @return array
     */

    public function setComponents($component)
    {
        if (isset($component->compatibility)) {
            if (!$component->isCompatibleWith(self::class)) {
                throw new Exception("Le composant n'est pas compatible");
            }
        }
        array_push($this->listComponents, $component);
        return $this;
    }

    // met à jour le contenu de la propriété `devices` à partir de la variable `$devices`

    /**
     * @var object
     *
     * @return array
     */

    public function setDevices($device)
    {
        if (isset($device->compatibility)) {
            if (!$device->isCompatibleWith(self::class)) {
                throw new Exception("Le composant n'est pas compatible");
            }
        }
        $listDevices[get_class($device)] = $device;
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
            "devices" => $this->getDevices()
        ];
    }
}
