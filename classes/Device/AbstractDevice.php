<?php
namespace Device;

use Interfaces\HasNameInterface;
use Interfaces\HasBrandInterface;
use Traits\HasNameTrait;
use Traits\HasBrandTrait;

class AbstractDevice implements HasNameInterface, HasBrandInterface
{

    /*
    * @var string
    */

    use HasNameTrait;

    use HasBrandTrait;
}
