<?php

namespace Interfaces;

interface HasTypeInterface
{
    public function getType(): ?string;
    public function setType(?string $type): HasTypeInterface;
    //retourne n'importe quel objet qui implemente HasTypeInterface
}
