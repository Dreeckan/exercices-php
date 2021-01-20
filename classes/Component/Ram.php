<?php

namespace Component;

class Ram extends AbstractComponent
{
    protected $memory;

    public function getMemory()
    {
        return $this->memory;
    }

    public function setMemory($memory)
    {
        $this->memory = $memory;
    }
}
