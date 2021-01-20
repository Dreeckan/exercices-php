<?php 

namespace Component;

use Interfaces\HasNameInterface, Interfaces\HasBrandInterface, Traits\HasNameTrait, Traits\HasBrandTrait;

abstract class AbstractComponent implements HasNameInterface, HasBrandInterface
{
    use HasNameTrait; 
    use HasBrandTrait;
};