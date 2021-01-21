<?php

namespace Device;


class Keyboard extends AbstractDevice
{
    /**
     * @var string
     */
    protected $format;

    public function getFormat()
    {
        return $this->format;
    }

    public function setFormat(string $fo)
    {
        $this->format = $fo;
    }

    public function jsonSerialize()
    {
        $ret = parent::jsonSerialize();
        $ret["jFormat"] = $this->getFormat();
        return $ret;
    }
}
