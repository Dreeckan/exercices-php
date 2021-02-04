<?php

namespace Interfaces;

interface HasNameInterface
{
    public function getName(): ?string;
    public function setName(?string $name): HasNameInterface;
    //retourne n'importe quel objet qui implemente HasNameInterface
}
