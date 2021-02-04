<?php

namespace Component;

class MotherBoard extends AbstractComponent
{
    protected $chipset;

    public function getChipset()
    {
        return $this->chipset;
    }
    public function setChipset($c)
    {
        $this->chipset = $c;
    }
    public function jsonSerialize()
    {
        $return = parent::jsonSerialize();
        $return['Chipset'] = $this->getChipset();
        return $return;
    }
}
