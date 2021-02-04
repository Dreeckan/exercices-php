<?php

namespace Traits;

use Interfaces\HasTypeInterface;

trait HasTypeTrait
{
    /**
     * @var string
     */
    protected $type = self::class;

    // met à jour le contenu de la propriété `type` à partir de la variable `$type`

    /**
     * @param string|null $type
     *
     * @return $this
     */

    public function setType(?string $type): HasTypeInterface
    {
        $this->type = $type;
        return $this;
    }

    // renvoie le contenu de la propriété `type`

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
}
