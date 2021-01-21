<?php

namespace Device;

use Interfaces\HasBrandInterface;
use Interfaces\HasNameInterface;
use JsonSerializable;
use Traits\HasBrandTrait;
use Traits\HasNameTrait;

abstract class AbstractDevice implements HasNameInterface, HasBrandInterface, JsonSerializable
{
    use HasNameTrait;
    use HasBrandTrait;
    public function jsonSerialize()
    {
        /*return [
            'devices' => [
                'name' => $this->name,
                'brand' => $this->brand
            ]
        ];*/
    }
}
