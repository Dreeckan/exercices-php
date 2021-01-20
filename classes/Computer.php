<?php

declare(strict_types=1);

use Interfaces\HasNameInterface;

abstract class  Computer implements HasNameInterface
{
    /**
     * @var array
     */
    protected $components;

    /**
     * @var array
     */
    protected $devices;

    /**
     * @var string
     */
    protected $name;

    /**
     * @param array $components
     */

    public function getComponents()
    {
        return $this->components;
    }

    public function getDevices()
    {
        return $this->devices;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setComponents($components)
    {
        $this->components = $components;
    }

    public function setDevices($devices)
    {
        $this->devices = $devices;
    }

    public function setName(?string $name): HasNameInterface
    {
        $this->name = $name;

        return $this;
    }
}
