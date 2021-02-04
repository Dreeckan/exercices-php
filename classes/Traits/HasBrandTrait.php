<?php

namespace Traits;

use Interfaces\HasBrandInterface;

trait HasBrandTrait
{
    /**
     * @var string
     */
    protected $brand='';

    // met à jour le contenu de la propriété `brand` à partir de la variable `$brand`

    /**
     * @param string|null $brand
     *
     * @return $this
     */

    public function setBrand(?string $brand): HasBrandInterface
    {
        $this->brand = $brand;
        return $this;
    }

    // renvoie le contenu de la propriété `brand`

    /**
     * @return string|null
     */
    public function getBrand(): ?string
    {
        return $this->brand;
    }
}
