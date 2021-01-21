<?php

namespace Device;


class Keyboard extends AbstractDevice
{
    protected $format;

    public function getFormat()
    {
        return $this->frequence;
    }

    public function setFormat($fo)
    {
        $this->frequence = $fo;
    }

    public function jsonSerialize()
    {
        $ret = parent::jsonSerialize();
        $ret["jFormat"] = $this->getFormat();
        return $ret;
    }
}
