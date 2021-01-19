<?php

namespace Component;


class Cpu extends AbstractComponent
{

    protected $frequence;

    public function getFrequence()
    {
        return $this->frequence;
    }

    public function setFrequence($f)
    {
        $this->frequence = $f;
    }
}
