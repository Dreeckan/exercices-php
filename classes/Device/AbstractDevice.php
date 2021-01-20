<?php

namespace Device;

use Interfaces\HasBrandInterface;
use Interfaces\HasNameInterface;
use Traits\HasNameTrait;
use Traits\HasBrandTrait;

abstract class AbstractDevice implements HasNameInterface, HasBrandInterface, HasNameTrait, HasBrandTrait
{
}
