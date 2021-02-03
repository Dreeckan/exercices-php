<?php

namespace Device;

class Speaker extends AbstractDevice
{
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
        $array["countSpeakers"] = $this->countSpeakers;
        $array["type"] = self::class;
        return $array;
    }
}
