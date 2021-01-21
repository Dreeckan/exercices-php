<?php

namespace Component;




class MotherBoard extends AbstractComponent{

    /**
     * @var string
     */
    protected $chipset = "";


    /**
     * Get the value of chipset
     *
     * @return  string
     */ 
    public function getChipset()
    {
        return $this->chipset;
    }

    /**
     * Set the value of chipset
     *
     * @param  string  $chipset
     *
     * @return  self
     */ 
    public function setChipset(string $chipset)
    {
        $this->chipset = $chipset;

        return $this;
    }
    public function jsonSerialize() 
{
     $tab = parent::jsonSerialize();
       $tab['chipset'] = $this->getChipset();
       return $tab;
  
 
}
}