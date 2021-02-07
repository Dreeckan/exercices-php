<?php

namespace Component;

use Interfaces\HasBrandInterface;
use Interfaces\HasNameInterface;
use JsonSerializable;
use Traits\HasBrandTrait;
use Traits\HasIdTrait;
use Traits\HasNameTrait;

abstract class AbstractComponent implements HasNameInterface, HasBrandInterface, JsonSerializable
{
    use HasIdTrait; // On ajoute le champ id et les méthodes qui vont avec à notre objet
    use HasNameTrait;
    use HasBrandTrait;

    /**
     * L'objet (et ses sous objets) est capable de nous renvoyer son FQCN
     *
     * @return false|string
     */
    public function getType()
    {
        return get_class($this);
    }

    abstract public function getTableName(): string;

    abstract public function getSpecificFields(): array;

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return [
            'type'  => $this->getType(),
            'id'    => $this->getId(),
            'name'  => $this->getName(),
            'brand' => $this->getBrand(),
        ];
    }
}