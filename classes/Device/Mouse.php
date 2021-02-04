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
    /**
     * @var string
     */
    protected $type = self::class;

    
    /**
     * Get the value of type
     *
     * @return  string
     */
    public function getType()
    {
        return $this->type;
    }
    public function setType($s)
    {
        $this->type = $s;
        return $this;
    }
}
