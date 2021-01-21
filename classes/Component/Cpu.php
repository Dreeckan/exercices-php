<?php

namespace Component;


class Cpu extends AbstractComponent
{
    /**
     * @var float
     */
    protected $frequence;

    public function getFrequence()
    {
        return $this->frequence;
    }

    public function setFrequence($f)
    {
        $this->frequence = $f;
    }

    public function jsonSerialize()
    {
        $ret = parent::jsonSerialize();
        $ret["jFrequence"] = $this->getFrequence();
        return $ret;
    }
}
