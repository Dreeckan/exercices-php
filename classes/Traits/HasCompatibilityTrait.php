<?php

namespace Traits;

use Interfaces\HasCompatibilityInterface;

trait HasCompatibilityTrait
{
    /**
     * @var array
     */

    public $compatibility = [];

    /**
     * @return array
     */
    public function getCompatibility(): array
    {
        return $this->compatibility;
    }

    /**
     * @return $this
     */

    public function setCompatibility(array $compatibility):HasCompatibilityInterface
    {
        $this->compatibility = $compatibility;
        return $this;
    }

    public function isCompatibleWith($className)
    {
        return in_array($className, $this->compatibility);
    }
}
