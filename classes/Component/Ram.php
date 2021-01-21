<?php

namespace Component;




class Ram extends AbstractComponent{

    /**
     *  @var integer
     */
    protected $size = 0;

    /**
     * Get the value of size
     *
     * @return  integer
     */ 
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set the value of size
     *
     * @param  integer  $size
     *
     * @return  self
     */ 
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }
    public function jsonSerialize() 
{
     $tab = parent::jsonSerialize();
       $tab['size'] = $this->getSize();
       return $tab;
  
 
}
}