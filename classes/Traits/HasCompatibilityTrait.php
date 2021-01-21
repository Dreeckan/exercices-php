<?php

namespace Traits;

trait HasCompatibilityTrait
{
    /**
     * @var array
     */
    protected $compatibility = [];

    public function getCompatibility(): ?array
    {
        return $this->compatibility;
    }
    public function setCompatibility($c): HasCompatibilityTrait
    {
        $this->compatibility = $c;
        return $this;
    }
    public function isCompatibleWith(string $classname): bool
    {
        if (in_array($classname, $this->compatibility)) {
            return true;
        }
    }
}
