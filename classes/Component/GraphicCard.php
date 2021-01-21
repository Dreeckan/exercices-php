<?php

namespace Component;



class GraphicCard extends AbstractComponent{

    /**
     *  @var boolean 
     */
    protected $rtx= true;

    /**
     * Get the value of rtx
     *
     * @return  boolean
     */ 
    public function getRtx()
    {
        return $this->rtx;
    }

    /**
     * Set the value of rtx
     *
     * @param  boolean  $rtx
     *
     * @return  self
     */ 
    public function setRtx(bool $rtx)
    {
        $this->rtx = $rtx;

        return $this;
    }
    public function jsonSerialize() 
{
     $tab = parent::jsonSerialize();
       $tab['Jrtx'] = $this->getRtx();
       return $tab;
  
 
}
}