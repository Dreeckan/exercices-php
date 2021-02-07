<?php

namespace Device;

class Speaker extends AbstractDevice
{
    /** @var float */
    protected $countSpeakers = 5.1;

    /**
     * @return float
     */
    public function getCountSpeakers(): float
    {
        return $this->countSpeakers;
    }

    /**
     * @param float $countSpeakers
     *
     * @return Speaker
     */
    public function setCountSpeakers(float $countSpeakers): Speaker
    {
        $this->countSpeakers = $countSpeakers;

        return $this;
    }

    public function getTableName(): string
    {
        return 'speaker';
    }

    public function getSpecificFields(): array
    {
        return [
            'countSpeakers' => $this->getCountSpeakers(),
        ];
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        $ret = parent::jsonSerialize();
        $ret['countSpeakers'] = $this->getCountSpeakers();

        return $ret;
    }
}