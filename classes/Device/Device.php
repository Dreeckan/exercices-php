<?php

namespace Device;

use Interfaces\HasNameInterface;
use Interfaces\HasBrandInterface;
use Traits\HasNameTrait;
use Traits\HasBrandTrait;

abstract class Device implements HasNameInterface, HasBrandInterface
{
    use HasNameTrait;

    use HasBrandTrait;
}