<?php

namespace Component;

class Cpu extends AbstractComponent
{
    /**
     * @var float
     */
    protected $frequency;

    /**
     * @param float $frequency
     *
     * @return $this
     */

    public function setFrequency(float $frequency)
    {
        $this->frequency = $frequency;
        return $this;
    }

    /**
     * @return float
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        $array = parent::jsonSerialize();
        $array["frequency"] = $this->frequency;
        $array["type"] = self::class;
        return $array;
    }
}
