<?php
namespace Computer;

use Interfaces\HasNameInterface;
use Traits\HasNameTrait;
use JsonSerializable;

abstract class Computer implements HasNameInterface, JsonSerializable
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

    public function jsonSerialize():array
    {
        return[
        'devices'=>$this->devices,
        'components'=>$this->components,
        'name'=>$this->name
    ];
    }

    // On déplace le code dans le trait
/*
    public function getName(): ?string
    {
        return $this->name;
    }
    public function setName(?string $n): HasNameInterface
    {
        $this->name = $n;
        return $this;
    }
*/
}
