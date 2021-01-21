<?php

namespace Component;


class Motherboard extends AbstractComponent
{
    /**
     * @var string
     */
    protected $chipset;

    public function getChipset()
    {
        return $this->chipset;
    }

    public function setChipset(string $c)
    {
        $this->chipset = $c;
    }

    public function jsonSerialize()
    {
        $ret = parent::jsonSerialize();
        $ret["jChipset"] = $this->getChipset();
        return $ret;
    }
}
