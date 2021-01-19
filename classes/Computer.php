<?php

 class Computer {

    /** @var array*/
    protected $components; 

    /**  @var array */
    protected $devices; 

   /**  @var string */
   protected $name;

   function getComponents() { return $this->components; }
   function getDevices() { return $this->devices; }
   function getName() { return $this->name; }

   function setComponents($components) {
       $this->components = $components;
   }

   function setDevices($devices) {
    $this->devices = $devices;
}

   function setName($name) {
    $this->name = $name;
}

}