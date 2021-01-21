<?php

namespace Component;


class Ram extends AbstractComponent
{


    /**
     * @var int
     */
    protected $size= 4;

    // GETTER AND SETTER

    /**
     * Get the value of size
     *
     * @return  int
     */ 
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set the value of size
     *
     * @param  int  $size
     *
     * @return  self
     */ 
    public function setSize(int $size)
    {
        $this->size = $size;

        return $this;
    }
    public function jsonSerialize(){

        $resulAbstractComponent = parent::jsonSerialize();

        $resulAbstractComponent["Jsize"] = $this->size;

        return $resulAbstractComponent;     
        
    }
}