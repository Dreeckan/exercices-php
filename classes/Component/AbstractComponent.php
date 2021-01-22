<?php

namespace Component;

use Interfaces\HasBrandInterface;
use Interfaces\HasNameInterface;
use Interfaces\HasCompatibilityInterface;
use JsonSerializable;

use Traits\HasBrandTrait;
use Traits\HasCompatibilityTrait;
use Traits\HasNameTrait;

abstract class AbstractComponent implements HasNameInterface, HasBrandInterface, JsonSerializable, HasCompatibilityInterface
{
    use HasNameTrait;
    use HasBrandTrait;
    use HasCompatibilityTrait;


    /**
     * @return array
     */

    public function jsonSerialize(): array
    {
        return [
            'name' => $this->name,
            'brand' => $this->brand
         ];
    }
}
