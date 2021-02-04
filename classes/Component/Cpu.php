<?php

namespace Component;

class Cpu extends AbstractComponent
{
    protected $frequency;

    public function getFrequency()
    {
        return $this->frequency;
    }
    public function setFrequency($f)
    {
        $this->frequency = $f;
    }
    public function jsonSerialize()
    {
        $return = parent::jsonSerialize();
        $return['Frequency'] = $this->getFrequency();
        return $return;
    }
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
}
