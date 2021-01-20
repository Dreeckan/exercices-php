<?php

namespace Component;

use Interfaces\HasNameInterface;
use Interfaces\HasBrandInterface;
use Traits\HasBrandTrait;
use Traits\HasNameTrait;

abstract class AbstractComponent implements HasNameInterface, HasBrandInterface
{
    use HasNameTrait;

    use HasBrandTrait;
};
