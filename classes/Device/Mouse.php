<?php

namespace Device;


class Mouse extends AbstractDevice{

    /**
     * @var boolean
     */
protected $leftHanded = true;

/**
 * Get the value of leftHanded
 *
 * @return  boolean
 */ 
public function getLeftHanded()
{
return $this->leftHanded;
}

/**
 * Set the value of leftHanded
 *
 * @param  boolean  $leftHanded
 *
 * @return  self
 */ 
public function setLeftHanded(bool $leftHanded)
{
$this->leftHanded = $leftHanded;

return $this;
}
public function jsonSerialize() 
{
     $tab = parent::jsonSerialize();
       $tab['leftHanded'] = $this->getLeftHanded();
       return $tab;
  
 
}
}