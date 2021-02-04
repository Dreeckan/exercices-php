<?php

namespace Device;

use Traits\HasTypeTrait;

class Speaker extends AbstractDevice
{
    use HasTypeTrait;

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
