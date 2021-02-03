<?php

namespace Device;

use Interfaces\HasBrandInterface;
use Interfaces\HasCompatibilityInterface;
use Interfaces\HasNameInterface;
use JsonSerializable;
use Traits\HasNameTrait;
use Traits\HasBrandTrait;
use Traits\HasCompatibilityTrait;

abstract class AbstractDevice implements HasNameInterface, HasCompatibilityInterface, HasBrandInterface, JsonSerializable
{
    use HasNameTrait;
    use HasBrandTrait;
    use HasCompatibilityTrait;

    public function jsonSerialize(): array
    {
        return [
                "name" => $this->getName(),
                "brand" => $this->getBrand()
            ];
    }
}
