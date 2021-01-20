<?php

namespace Device;

use Interfaces\HasNameInterface, Interfaces\HasBrandInterface, Traits\HasNameTrait, Traits\HasBrandTrait;

abstract class AbstractDevice implements HasNameInterface, HasBrandInterface
{
    use HasNameTrait; 
    use HasBrandTrait;
};