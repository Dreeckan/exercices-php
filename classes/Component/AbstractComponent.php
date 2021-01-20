<?php

namespace Component;

use Interfaces\HasNameInterface;

abstract class AbstractComponent implements HasNameInterface
{

    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $brand;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName($n): HasNameInterface
    {
        $this->name = $n;
        return $this;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function setBrand($b)
    {
        $this->brand = $b;
        return $this;
    }
}
