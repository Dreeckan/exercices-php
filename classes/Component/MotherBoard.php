<?php

namespace Component;

class MotherBoard extends AbstractComponent
{
    protected $chipset;

    public function getChipset()
    {
        return $this->chipset;
    }

    public function setChipset($chipset)
    {
        $this->chipset = $chipset;
    }
}
