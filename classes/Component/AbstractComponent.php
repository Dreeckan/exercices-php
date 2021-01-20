<?php

declare(strict_types=1);

namespace Component;

use Interfaces\HasBrandInterface;
use Interfaces\HasNameInterface;
use Traits\HasNameTrait;

abstract class  AbstractComponent implements HasNameInterface, HasBrandInterface
{
    /**
     * @var string
     */
    protected $brand;


    public function getBrand(): ?string
    {
        return $this->brand;
    }


    public function setBrand(?string $brand): HasBrandInterface
    {
        $this->brand = $brand;

        return $this;
    }

    use HasNameTrait;
}
