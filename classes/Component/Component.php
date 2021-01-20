<?php

namespace Component;

use Interfaces\HasNameInterface;
use Interfaces\HasBrandInterface;
use Traits\HasNameTrait;
use Traits\HasBrandTrait;

abstract class Component implements HasNameInterface, HasBrandInterface
{
    use HasNameTrait;

    use HasBrandTrait;
}