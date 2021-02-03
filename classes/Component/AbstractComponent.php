<?php

namespace Component;

use Interfaces\HasBrandInterface;
use Interfaces\HasNameInterface;
use Traits\HasNameTrait;
use Traits\HasBrandTrait;
use JsonSerializable;

abstract class AbstractComponent implements HasNameInterface, HasBrandInterface, JsonSerializable
{
    use HasNameTrait;
    use HasBrandTrait;
};
