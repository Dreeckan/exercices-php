<?php

namespace Interfaces;

interface HasBrandInterface
{
    /** @return string|null */
    public function getBrand(): ?string;

    /** @param string|null $name
     *
     *HasBrandInterface
     **/

    public function setBrand(?string $brand): HasBrandInterface;
}
