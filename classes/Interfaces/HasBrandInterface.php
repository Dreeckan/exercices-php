<?php

namespace Interfaces;

interface HasBrandInterface
{
    public function getBrand(): ?string;
    public function setBrand(?string $name): HasBrandInterface;
    //retourne n'importe quel objet qui implemente HasNameInterface
}
