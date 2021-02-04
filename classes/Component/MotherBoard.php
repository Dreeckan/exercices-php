<?php

namespace Component;

class MotherBoard extends AbstractComponent
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
     * @var string|null
     */
    protected $chipset;

    /**
     * @param string|null $chipset
     *
     * @return $this
     */

    public function setChipset(?string $chipset)
    {
        $this->chipset = $chipset;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getChipset()
    {
        return $this->chipset;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        $array = parent::jsonSerialize();
        $array["chipset"] = $this->getChipset();
        return $array;
    }
}
