<?php

use Interfaces\HasNameInterface;
use Traits\HasNameTrait;

abstract class Computer implements HasNameInterface
{
    use HasNameTrait;

    /** @var array */
    protected $components = [];

    /** @var array */
    protected $devices = [];

    /**
     * @return array
     */
    public function getComponents(): array
    {
        return $this->components;
    }

    /**
     * @param array $c
     *
     * @return self
     */
    public function setComponents(array $c): self
    {
        $this->components = $c;

        return $this;
    }

    /**
     * @return array
     */
    public function getDevices(): array
    {
        return $this->devices;
    }

    /**
     * @param array $devices
     *
     * @return self
     */
    public function setDevices(array $devices): self
    {
        $this->devices = $devices;

        return $this;
    }
}