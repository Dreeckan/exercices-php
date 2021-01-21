<?php
namespace Component;

class Cpu extends AbstractComponent
{
    /**
     * @var float
     */

    public $frequency = 0.0;

    public function getFrequency(): float
    {
        return $this->frequency;
    }
    public function setFrequency(float $frequency)
    {
        $this->frequency = $frequency;
        return $this;
    }

    public function jsonSerialize()
    {
        $array = parent::jsonSerialize();
        $array["frequency"] = $this->frequency;
        return [ 'Cpu' => $array];
    }
}
