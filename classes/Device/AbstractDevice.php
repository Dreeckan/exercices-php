<?php

namespace Device;

use Interfaces\HasBrandInterface;
use Interfaces\HasNameInterface;
use Traits\HasNameTrait;
use Traits\HasBrandTrait;

abstract class AbstractDevice implements HasNameInterface, HasBrandInterface
{
    //BRAND
    use HasBrandTrait;

    //NAME
    use HasNameTrait;
}
