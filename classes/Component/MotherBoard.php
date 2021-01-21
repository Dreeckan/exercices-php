<?php

namespace Component;


class MotherBoard extends AbstractComponent
{
  

    /**
     * @var string|null 
     */
    protected $chipset = ''|| NULL;

    // GETTER AND SETTER

    /**
     * Get the value of chipset
     *
     * @return  string|null
     */ 
    public function getChipset()
    {
        return $this->chipset;
    }

    /**
     * Set the value of chipset
     *
     * @param  string|null  $chipset
     *
     * @return  self
     */ 
    public function setChipset($chipset)
    {
        $this->chipstet = $chipset;

        return $this;
    }
    public function jsonSerialize(){

        $resulAbstractComponent = parent::jsonSerialize();

        $resulAbstractComponent["Jchipset"] = $this->chipset;

        return $resulAbstractComponent;     
        
    }
}