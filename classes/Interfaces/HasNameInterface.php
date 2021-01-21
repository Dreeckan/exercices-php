<?php
namespace Interfaces;

interface HasNameInterface
{
    /** @return string|null */

    public function getName(): ?string;

    /** @param string|null $name */

    public function setName(?string $name): HasNameInterface;
    //retourne n'importe quel objet qui implemente HasNameInterface
}
