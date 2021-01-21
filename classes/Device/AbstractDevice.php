<?php

namespace Device;

use Interfaces\HasBrandInterface;
use Interfaces\HasNameInterface;
use JsonSerializable;
use Traits\HasNameTrait;
use Traits\HasBrandTrait;

abstract class AbstractDevice implements HasNameInterface, HasBrandInterface, JsonSerializable
{
    use HasNameTrait;
    use HasBrandTrait;

    public function jsonSerialize()
    {
        return [
            "jNameDevice" => $this->getName(),
            "jBrandDevice" => $this->getBrand()
        ];
    }
};
