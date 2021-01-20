<?php

declare(strict_types=1);

use Interfaces\HasBrandInterface;
use Interfaces\HasNameInterface;
use Traits\HasNameTrait;

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

    public function setComponents($components)
    {
        $this->components = $components;
    }

    public function setDevices($devices)
    {
        $this->devices = $devices;
    }

    use HasNameTrait;
}
