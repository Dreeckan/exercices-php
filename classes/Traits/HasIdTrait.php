<?php

namespace Traits;

use Interfaces\HasIdInterface;

trait HasIdTrait
{
    /**
     * @var int
     */
    protected $id='';

    // met à jour le contenu de la propriété `id` à partir de la variable `$id`

    /**
     * @param int $id
     *
     * @return $this
     */

    public function setId(int $id): HasIdInterface
    {
        $this->id = $id;
        return $this;
    }

    // renvoie le contenu de la propriété `id`

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
}
