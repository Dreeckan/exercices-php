<?php

namespace Component;

class MotherBoard extends AbstractComponent
{
    protected $chipset;

    public function getChipset()
    {
        return $this->chipset;
    }
    public function setChipset($c)
    {
        $this->chipset = $c;
    }
    public function jsonSerialize()
    {
        $return = parent::jsonSerialize();
        $return['Chipset'] = $this->getChipset();
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
