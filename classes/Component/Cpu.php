<?php

namespace Component;

class Cpu extends AbstractComponent
{
    //Ajoute l'attribut $frequency à la classe Cpu avec son getter et son setter.
    /** @var float */
    protected $frequency = 0.0;

    /**
     * @return float
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * @param float $frequency
     *
     * @return Cpu
     */
    public function setFrequency(float $frequency)
    {
        $this->frequency = $frequency;

        return $this;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        $array = parent::jsonSerialize();
        $array['frequency'] = $this->getFrequency();

        return $array;
    }
}
