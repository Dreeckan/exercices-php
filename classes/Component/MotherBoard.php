<?php

namespace Component;

class MotherBoard extends AbstractComponent
{
    /** @var string|null  */
    protected $chipset = null;

    /**
     * @return string|null
     */
    public function getChipset()
    {
        return $this->chipset;
    }

    /**
     * @param string|null $chipset
     *
     * @return MotherBoard
     */
    public function setChipset(?string $chipset)
    {
        $this->chipset = $chipset;

        return $this;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        $array = parent::jsonSerialize();
        $array['chipset'] = $this->getChipset();

        return $array;
    }
}
