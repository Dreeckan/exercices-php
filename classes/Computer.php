<?php

abstract class Computer
{
    /** @var array */
    protected $components = [];

    /** @var array */
    protected $devices = [];

    /** @var string */
    protected $name = '';

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

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}