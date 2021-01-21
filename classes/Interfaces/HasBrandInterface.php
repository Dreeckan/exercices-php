<?php

namespace interfaces;


interface HasBrandInterface
{
    public function getBrand(): ?string;

    public function setBrand(?string $brand): HasBrandInterface;
}
