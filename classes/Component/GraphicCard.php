<?php

namespace Component;


class GraphicCard extends AbstractComponent
{

    /**
     * @var bool
     */
    protected $rtx = true;

    // GETTER AND SETTER

    /**
     * Get the value of rtx
     *
     * @return  bool
     */ 
    public function getRtx()
    {
        return $this->rtx;
    }

    /**
     * Set the value of rtx
     *
     * @param  bool  $rtx
     *
     * @return  self
     */ 
    public function setRtx(bool $rtx)
    {
        $this->rtx = $rtx;

        return $this;
    }
    public function jsonSerialize(){

        $resulAbstractComponent = parent::jsonSerialize();

        $resulAbstractComponent["Jrtx"] = $this->rtx;

        return $resulAbstractComponent;     
        
    }
}