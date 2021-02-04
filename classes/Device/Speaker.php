<?php

namespace Device;

class Speaker extends AbstractDevice
{
    /** @var float */
    protected $countSpeakers = 5.1;

    /**
     * @return float
     */
    public function getCountSpeakers()
    {
        return $this->countSpeakers;
    }

    /**
     * @param float $countSpeakers
     *
     * @return Speaker
     */
    public function setCountSpeakers(float $countSpeakers)
    {
        $this->countSpeakers = $countSpeakers;

        return $this;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        $array = parent::jsonSerialize();
        $array['countSpeakers'] = $this->getCountSpeakers();

        return $array;
    }
}
