<?php
namespace Device;

class Speaker extends AbstractDevice
{
    
    /**
     * @var float
     */

    public $countSpeakers = 0;

    public function getCountSpeakers(): float
    {
        return $this->countSpeakers;
    }
    public function setCountSpeakers(float $countSpeakers)
    {
        $this->countSpeakers = $countSpeakers;
        return $this;
    }
    public function jsonSerialize()
    {
        parent::jsonSerialize();

        return [
            'Speakers' => [
                'name' => $this->name,
                'brand' => $this->brand,
                'countSpeakers' => $this->countSpeakers
            ]
        ];
    }
}
