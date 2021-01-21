<?php

namespace Component;

use Interfaces\HasBrandInterface;
use Interfaces\HasNameInterface;
use JsonSerializable;

use Traits\HasBrandTrait;
use Traits\HasNameTrait;

abstract class AbstractComponent implements HasNameInterface, HasBrandInterface, JsonSerializable
{
    use HasNameTrait;
    use HasBrandTrait;
    public function jsonSerialize()
    {
        return [
            'name' => $this->name,
            'brand' => $this->brand
         ];
    }
}
