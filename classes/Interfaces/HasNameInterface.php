<?php

namespace Interfaces;

interface HasNameInterface
{
    public function getName(): ?string;

    public function setName(?string $name): HasNameInterface;
}
