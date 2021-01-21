<?php

use interfaces\HasNameInterface;
use Traits\HasNameTrait;


abstract class Computer implements HasNameInterface, JsonSerializable {

    use HasNameTrait;

    /**
     * @var array
     */
    protected $components = [];

    /**
     *  @var array 
     */
    protected $devices = [];

    // /**
    //  * @var string
    //  */
    // protected $name = ""; 

public function getComponents()
{
    return $this->components;
} 

public function setComponents(array $c)
{
    $this->components = $c;
}


    /**
     * Get the value of devices
     *
     * @return  array
     */ 
    public function getDevices()
    {
        return $this->devices;
    }

    /**
     * Set the value of devices
     *
     * @param  array  $devices
     *
     * @return  self
     */ 
    public function setDevices(array $devices)
    {
        $this->devices = $devices;

        return $this;
    }
public function jsonSerialize() 
{
  return [
      "Jcomponent"=> $this->components,
      "Jdevices"=> $this->devices,
      "Jname" => $this->name,
  ];
    
}

}
