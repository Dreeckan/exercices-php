<?php

namespace Traits;

use Interfaces\HasNameInterface;

trait HasNameTrait
{
    protected $name;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $n): HasNameInterface
    {
        $this->name = $n;
        return $this;
    }
}
