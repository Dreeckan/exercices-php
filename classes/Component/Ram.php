<?php
namespace Component;

class Ram extends AbstractComponent
{
    protected $size;

    public function getSize()
    {
        return $this->size;
    }
    public function setSize($s)
    {
        $this->size = $s;
    }
    public function jsonSerialize()
    {
        $return = parent::jsonSerialize();
        $return['Size'] = $this->getSize();
        return $return;
    }
}
