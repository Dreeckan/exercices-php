<?php

namespace Interfaces;

interface HasCompatibilityInterface
{
    public function getCompatibility(): array;
    public function setCompatibility(array $compatibility): HasCompatibilityInterface;
    public function isCompatibleWith(string $classname): bool;
}
