<?php

namespace Device;


class Mouse extends AbstractDevice
{


    /**
     * @var bool
     */
    protected $leftHanded = true;

    // GETTER AND SETTER

    /**
     * Get the value of leftHanded
     *
     * @return  bool
     */ 
    public function getLeftHanded()
    {
        return $this->leftHanded;
    }

    /**
     * Set the value of leftHanded
     *
     * @param  bool  $leftHanded
     *
     * @return  self
     */ 
    public function setLeftHanded(bool $leftHanded)
    {
        $this->leftHanded = $leftHanded;

        return $this;
    }
    public function jsonSerialize(){

        $resulAbstractDevices = parent::jsonSerialize();
        $resulAbstractDevices["JleftHanded"] = $this->leftHanded;

        return $resulAbstractDevices;     
        
    }
}