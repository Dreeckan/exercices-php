<?php

namespace Device;

use Interfaces\HasBrandInterface;
use Interfaces\HasNameInterface;
use JsonSerializable;
use Traits\HasBrandTrait;
use Traits\HasCompatibilityTrait;
use Traits\HasNameTrait;

abstract class AbstractDevice implements HasNameInterface, HasBrandInterface, JsonSerializable
{
    use HasNameTrait;
    use HasBrandTrait;
    use HasCompatibilityTrait;


    public function jsonSerialize()
    {
        return [
            'name' => $this->name,
            'brand' => $this->brand
        ];
    }
}
