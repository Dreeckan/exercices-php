<?php

namespace Device;

class Speaker extends AbstractDevice
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
    protected $countSpeakers;

    /**
     * @param float $countSpeakers
     *
     * @return $this
     */

    public function setCountSpeakers(float $countSpeakers)
    {
        $this->countSpeakers = $countSpeakers;
        return $this;
    }

    /**
     * @return float
     */
    public function getCountSpeakers()
    {
        return $this->countSpeakers;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        $array = parent::jsonSerialize();
        $array["countSpeakers"] = $this->getCountSpeakers();
        return $array;
    }
}
