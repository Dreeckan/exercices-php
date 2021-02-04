<?php

namespace Component;

class Cpu extends AbstractComponent
{

    /**
     * @var string
     */
    protected $type = self::class;

    
    /**
     * Get the value of type
     *
     * @return  string
     */
    public function getType()
    {
        return $this->type;
    }

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
