<?php

namespace Component;

use Traits\HasTypeTrait;

class Cpu extends AbstractComponent
{
    use HasTypeTrait;

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
        $array["frequency"] = $this->getFrequency();
        return $array;
    }
}
