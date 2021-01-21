<?php

namespace Component;


class Cpu extends AbstractComponent
{
    /**
     * @var string
     */
    protected $frequence;

    public function getFrequence()
    {
        return $this->frequence;
    }

    public function setFrequence(string $f)
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
