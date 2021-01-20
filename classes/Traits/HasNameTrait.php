<?php

namespace Traits;

use Interfaces\HasNameInterface;
use Interfaces\HasBrandInterface;

trait HasNameTrait
{
    /**
    * @var string
    * */
    protected $name;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): HasNameInterface
    {
        $this->name = $name;
        return $this;
    }
}