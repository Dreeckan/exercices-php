<?php

namespace Device;


class Speaker extends AbstractDevice
{
  

    /**
     * @var float
     */
    protected $countSpeakers = 0.0;

    // GETTER AND SETTER

    /**
     * Get the value of countSpeakers
     *
     * @return  float
     */ 
    public function getCountSpeakers()
    {
        return $this->countSpeakers;
    }

    /**
     * Set the value of countSpeakers
     *
     * @param  float  $countSpeakers
     *
     * @return  self
     */ 
    public function setCountSpeakers(float $countSpeakers)
    {
        $this->countSpeakers = $countSpeakers;

        return $this;
    }
    public function jsonSerialize(){

        $resulAbstractDevices = parent::jsonSerialize();
        $resulAbstractDevices["JcountSpeakers"] = $this->countSpeakers;

        return $resulAbstractDevices;     
        
    }
}