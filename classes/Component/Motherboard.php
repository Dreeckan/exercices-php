<?php

namespace Component;


class Motherboard extends AbstractComponent
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
}
