<?php

namespace Device;

abstract class AbstractDevice
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $brand;

    // met à jour le contenu de la propriété `name` à partir de la variable `$name`

    /**
     * @var string
     *
     * @return string
     */

    public function setName($name)
    {
        return $this->name = $name;
    }

    // met à jour le contenu de la propriété `brand` à partir de la variable `$brand`

    /**
     * @var string
     *
     * @return string
     */

    public function setBrand($brand)
    {
        return $this->brand = $brand;
    }

    // renvoie le contenu de la propriété `name`

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    // renvoie le contenu de la propriété `brand`

    /**
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }
}
