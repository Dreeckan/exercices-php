<?php

namespace Component;

use Interfaces\HasBrandInterface;
use Interfaces\HasNameInterface;
use JsonSerializable;
use Traits\HasNameTrait;
use Traits\HasBrandTrait;

abstract class AbstractComponent implements HasNameInterface, HasBrandInterface, JsonSerializable
{
    use HasNameTrait;
    use HasBrandTrait;

    public function jsonSerialize()
    {

        return [
            "jNameComponent" => $this->getName(),
            "jBrandComponent" => $this->getBrand(),
        ];
    }
}
