<?php

use Interfaces\HasNameInterface;
use Traits\HasNameTrait;

abstract class Computer implements HasNameInterface
{
    /**
   * @var array
   */

    protected $composents;
    /**
   * @var array
   */

    protected $devices;
    /**
   * @var string
   */

    /*
    Les propriétés, méthodes ou constantes définies avec le mot clef protected
     ne vont être accessibles que depuis l’intérieur de la classe qui les a définies
      ainsi que depuis les classes qui en héritent ou la classe parente.
    */
    public function __construct(
        $composents = [],
        $devices = [],
        $name = 'default'
    ) {
        $this->composents = $composents;
        $this->devices = $devices;
        $this->name = $name;
    }
    //GETTERS
    public function getComponents()
    {
        return  $this->composents;
    }
    public function getDevices()
    {
        return $this->devices;
    }
    //SETTERS
    public function setComponents($composents)
    {
        $this->composents = $composents;
    }
    public function setDevices($devices)
    {
        $this->devices = $devices;
    }
    use HasNameTrait;
}
