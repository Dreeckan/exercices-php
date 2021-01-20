<?php

namespace Component;

class Cpu extends AbstractComponent
{
    protected $frequency;

    public function getFrequency()
    {
        return $this->frequency;
    }

    public function setFrequency($frequency)
    {
        $this->frequency = $frequency;
    }
}
