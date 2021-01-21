<?php

namespace Device;


class Keyboard extends AbstractDevice
{
 

    /**
     * @var string
     */
    protected $format = 'AZERTY';

    // GETTER AND SETTER

    /**
     * Get the value of format
     *
     * @return  string
     */ 
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Set the value of format
     *
     * @param  string  $format
     *
     * @return  self
     */ 
    public function setFormat(string $format)
    {
        $this->format = $format;

        return $this;
    }
    public function jsonSerialize(){

        $resulAbstractDevices = parent::jsonSerialize();
        $resulAbstractDevices["Jformat"] = $this->format;

        return $resulAbstractDevices;     
        
    }
}