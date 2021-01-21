<?php
namespace Component;

class Cpu extends AbstractComponent
{
    /**
     * @var float
     */

    public $frequency = 0.0;

    public function getFrequency(): float
    {
        return $this->frequency;
    }
    public function setFrequency(float $frequency)
    {
        $this->frequency = $frequency;
        return $this;
    }

    public function jsonSerialize()
    {
        parent::jsonSerialize();

        return [
            'Cpu' => [
                'name' => $this->name,
                'brand' => $this->brand,
                'frequency' => $this->frequency
            ]
        ];
    }
}
