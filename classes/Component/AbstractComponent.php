<?php

namespace Component;

use Interfaces\HasNameInterface;
use Interfaces\HasBrandInterface;
use Traits\HasNameTrait;
use Traits\HasBrandTrait;

abstract class AbstractComponent implements HasNameInterface, HasBrandInterface
{
    //Utilisation du trait pour le name
    use HasNameTrait;

    //Utilisation du trait pour le brand
    use HasBrandTrait;
}
