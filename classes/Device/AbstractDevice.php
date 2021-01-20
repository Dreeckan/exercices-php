<?php

namespace Device;

use Interfaces\HasBrandInterface;
use Interfaces\HasNameInterface;

abstract class AbstractDevice implements HasNameInterface, HasBrandInterface
{
    /**
     * @var string
     */
    protected $name='';

    /**
     * @var string
     */
    protected $brand='';

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

    // renvoie le contenu de la propriété `name`

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
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
