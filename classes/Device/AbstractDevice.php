<?php

namespace Device;

use Interfaces\HasNameInterface;
use Interfaces\HasBrandInterface;
use Traits\HasNameTrait;
use Traits\HasBrandTrait;

abstract class AbstractDevice implements HasNameInterface, HasBrandInterface
{
    use HasNameTrait;
    use HasBrandTrait;
}
