<?php

namespace Device;

class Mouse extends AbstractDevice
{
    /**
     * @var bool
     */
    protected $leftHanded;

    /**
     * @param bool $leftHanded
     *
     * @return $this
     */

    public function setLeftHanded(bool $leftHanded)
    {
        $this->leftHanded = $leftHanded;
        return $this;
    }

    /**
     * @return bool
     */
    public function getLeftHanded()
    {
        return $this->leftHanded;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        $array = parent::jsonSerialize();
        $array["leftHanded"] = $this->leftHanded;
        $array["type"] = self::class;
        return $array;
    }
}
