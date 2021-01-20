<?php

namespace Component;

use Interfaces\HasBrandInterface;
use Interfaces\HasNameInterface;
use Traits\HasNameTrait;
use Traits\HasBrandTrait;

abstract class AbstractComponent implements HasNameInterface, HasBrandInterface, HasNameTrait, HasBrandTrait
{
}
