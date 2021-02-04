<?php
namespace Device;

class Speaker extends AbstractDevice
{
    protected $countSpeakers;

    public function getCountSpeakers()
    {
        return $this->countSpeakers;
    }
    public function setCountSpeakers($c1)
    {
        $this->format = $c1;
    }
    public function jsonSerialize()
    {
        $return = parent::jsonSerialize();
        $return['CountSpeakers'] = $this->getCountSpeakers();
        return $return;
    }
}
