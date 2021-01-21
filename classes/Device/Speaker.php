<?php

namespace Device;


class Speaker extends AbstractDevice
{

    /**
     * @var float
     */
    protected $countSpeakers = 0.0;

    /**
     * Get the value of countSpeakers
     *
     * @return  float
     */
    public function getCountSpeakers()
    {
        return $this->countSpeakers;
    }

    /**
     * Set the value of countSpeakers
     *
     * @param  float  $countSpeakers
     *
     * @return  self
     */
    public function setCountSpeakers(float $countSpeakers)
    {
        $this->countSpeakers = $countSpeakers;

        return $this;
    }
    public function jsonSerialize()
    {
        $tab = parent::jsonSerialize();
        $tab['countSpeakers'] = $this->getCountSpeakers();
        return $tab;
    }
}
