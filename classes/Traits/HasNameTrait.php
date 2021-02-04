<?php

namespace Traits;

use Interfaces\HasNameInterface;

trait HasNameTrait
{
    /**
     * @var string
     */
    protected $name='';

    // met à jour le contenu de la propriété `name` à partir de la variable `$name`

    /**
     * @param string|null $name
     *
     * @return $this
     */

    public function setName(?string $name): HasNameInterface
    {
        $this->name = $name;
        return $this;
    }

    // renvoie le contenu de la propriété `name`

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
}
