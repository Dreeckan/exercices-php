<?php

namespace Component;



class Cpu extends AbstractComponent
{

    /**
     * @var float
     */
    protected $frequency = 0.0;

    // GETTER AND SETTER

    /**
     * Get the value of frequency
     *
     * @return  float
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * Set the value of frequency
     *
     * @param  float  $frequency
     *
     * @return  self
     */
    public function setFrequency(float $frequency)
    {
        $this->frequency = $frequency;

        return $this;
    }
    public function jsonSerialize()
    {
        $tab = parent::jsonSerialize();
        $tab['Jfrequency'] = $this->getFrequency();
        return $tab;
    }
}
