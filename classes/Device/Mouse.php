<?php
namespace Device;

class Mouse extends AbstractDevice
{
    protected $leftHanded;

    public function getLeftHanded()
    {
        return $this->leftHanded;
    }
    public function setLeftHanded($l)
    {
        $this->format = $l;
    }
    public function jsonSerialize()
    {
        $return = parent::jsonSerialize();
        $return['LeftHanded'] = $this->getLeftHanded();
        return $return;
    }
}
