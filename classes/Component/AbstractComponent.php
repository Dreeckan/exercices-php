<?php

namespace Component;

use Interfaces\HasBrandInterface;
use Interfaces\HasCompatibilityInterface;
use Interfaces\HasIdInterface;
use Interfaces\HasNameInterface;
use Interfaces\HasTypeInterface;

use JsonSerializable;
use Traits\HasNameTrait;
use Traits\HasBrandTrait;
use Traits\HasCompatibilityTrait;
use Traits\HasIdTrait;
use Traits\HasTypeTrait;

abstract class AbstractComponent implements HasNameInterface, HasCompatibilityInterface, HasBrandInterface, JsonSerializable, HasTypeInterface, HasIdInterface
{
    use HasNameTrait;
    use HasBrandTrait;
    use HasCompatibilityTrait;
    use HasIdTrait;
    use HasTypeTrait;

    public function jsonSerialize(): array
    {
        return [
                "name" => $this->getName(),
                "brand" => $this->getBrand(),
            ];
    }
}
