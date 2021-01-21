<?php

namespace Device;

use Interfaces\HasBrandInterface;
use Interfaces\HasNameInterface;
use JsonSerializable;
use Traits\HasNameTrait;
use Traits\HasBrandTrait;
use Traits\HasCompatibilityTrait;

abstract class AbstractDevice implements HasNameInterface, HasBrandInterface, JsonSerializable, HasCompatibilityTrait
{
    use HasNameTrait;
    use HasBrandTrait;
    use HasCompatibilityTrait;

    public function jsonSerialize()
    {
        return [
            "jNameDevice" => $this->getName(),
            "jBrandDevice" => $this->getBrand()
        ];
    }
};
