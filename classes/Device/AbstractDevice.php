<?php

namespace Device;

use Interfaces\HasBrandInterface;
use Interfaces\HasNameInterface;
use Traits\HasNameTrait;
use Traits\HasBrandTrait;
use JsonSerializable;

abstract class AbstractDevice implements HasNameInterface, HasBrandInterface, JsonSerializable
{
    use HasNameTrait;
    use HasBrandTrait;
};
