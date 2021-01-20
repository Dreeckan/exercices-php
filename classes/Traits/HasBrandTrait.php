<?php

namespace Traits;

use Interfaces\HasBrandInterface;

trait HasBrandTrait
{
    /**
     * @var string
     */
    protected $name;

    public function getBrand(): ?string
    {
        return $this->name;
    }

    public function setBrand(?string $name): HasBrandInterface
    {
        $this->name = $name;

        return $this;
    }
}
