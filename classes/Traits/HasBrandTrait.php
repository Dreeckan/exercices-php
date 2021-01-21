<?php

namespace Traits;

use Interfaces\HasBrandInterface;

trait HasBrandTrait
{
    /**
     * @var string
     */

    protected $brand = '';

    /**
     * @return string|null
     */
    public function getBrand(): ?string
    {
        return $this->brand;
    }

    /**
     * @return $this
     */

    public function setBrand(?string $brand): HasBrandInterface
    {
        $this->brand = $brand;
        return $this;
    }
}
