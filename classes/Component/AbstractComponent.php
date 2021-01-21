<?php

namespace Component;

use Interfaces\HasBrandInterface;
use Interfaces\HasNameInterface;
use JsonSerializable;
use Traits\HasNameTrait;
use Traits\HasBrandTrait;
use Traits\HasCompatibilityTrait;

abstract class AbstractComponent implements HasNameInterface, HasBrandInterface, JsonSerializable, HasCompatibilityTrait
{
    use HasNameTrait;
    use HasBrandTrait;
    use HasCompatibilityTrait;

    public function jsonSerialize()
    {

        return [
            "jNameComponent" => $this->getName(),
            "jBrandComponent" => $this->getBrand(),
        ];
    }
}
