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
        if (isset($compatibility)) {
            foreach ($components as $itemCompatible) {
                $check = $itemCompatible->isCompatibleWith(self::class);
                if (!$check) {
                    throw new Exception("Le composant n'est pas compatible");
                }
            }
        }
        

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
            if (isset($devices->compatibility)) {
                $check = $devices->isCompatibleWith(self::class);
                if (!$check) {
                    throw new Exception("Le composant n'est pas compatible");
                }
        }

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
