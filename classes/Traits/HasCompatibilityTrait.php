<?php

namespace Traits;

use Interfaces\HasCompatibilityInterface;

trait HasCompatibilityTrait
{
    /**
     * @var array
     */
    protected $compatibility = [];

    // met à jour le contenu de la propriété `compatibility` à partir de la variable `$compatibility`

    /**
     * @param array $compatibility
     *
     * @return $this
     */

    public function setCompatibility(array $compatibility): HasCompatibilityInterface
    {
        $this->compatibility = $compatibility;
        return $this;
    }

    // renvoie le contenu de la propriété `compatibility`

    /**
     * @return array
     */
    public function getCompatibility(): array
    {
        return $this->compatibility;
    }

    // renvoie si l'élément est compatible avec ce type d'objet

    /**
     * @param string $classname
     * @return bool
     */

    public function isCompatibleWith(string $classname): bool
    {
        return in_array($classname, $this->compatibility);
    }
}
