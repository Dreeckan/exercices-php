<?php

namespace Component;

use Interfaces\HasNameInterface;
use Interfaces\HasBrandInterface;
use Traits\HasNameTrait;
use Traits\HasBrandTrait;

abstract class AbstractComponent implements HasNameInterface, HasBrandInterface
{
    use HasNameTrait;
    use HasBrandTrait;
}
