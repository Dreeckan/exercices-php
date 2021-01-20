<?php

namespace Computer;

use Interfaces\HasNameInterface;

abstract class Computer implements HasNameInterface
{
    /**
     * @var array
     */
    protected $components = [];
    /**
     * @var array
     */
    protected $devices = [];
    /**
     * @var string
     */
    protected $name;

    public function getComponents()
    {
        return $this->components;
    }

    public function setComponents($c)
    {
        $this->components = $c;
    }

    public function getDevices()
    {
        return $this->devices;
    }

    public function setDevices($d)
    {
        $this->devices = $d;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $n): HasNameInterface
    {
        $this->name = $n;
        return $this;
    }
}
