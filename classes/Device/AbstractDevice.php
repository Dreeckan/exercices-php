<?php

namespace Device;

use Interfaces\HasBrandInterface;
use Interfaces\HasNameInterface;
use JsonSerializable;
use Traits\HasBrandTrait;
use Traits\HasIdTrait;
use Traits\HasNameTrait;

abstract class AbstractDevice implements HasNameInterface, HasBrandInterface, JsonSerializable
{
    use HasIdTrait;
    use HasNameTrait;
    use HasBrandTrait;

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