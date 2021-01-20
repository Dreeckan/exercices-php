<?php

declare(strict_types=1);

namespace Device;

use Interfaces\HasBrandInterface;
use Interfaces\HasNameInterface;
use Traits\HasBrandTrait;
use Traits\HasNameTrait;

abstract class  AbstractDevice implements HasNameInterface, HasBrandInterface
{

    use HasBrandTrait;

    use HasNameTrait;
}
