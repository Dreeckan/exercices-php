<?php
namespace Device;

use Interfaces\HasNameInterface;
use Interfaces\HasBrandInterface;
use Traits\HasNameTrait;
use Traits\HasBrandTrait;
use JsonSerializable;

abstract class AbstractDevice implements HasNameInterface, HasBrandInterface, JsonSerializable
{
    use HasNameTrait;
    use HasBrandTrait;
    public function jsonSerialize()
    {
        return[
        'brand'=>$this->brand,
        'name'=>$this->name
    ];
    }
}
