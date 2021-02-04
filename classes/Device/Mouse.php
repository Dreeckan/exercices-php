<?php

namespace Device;

use Traits\HasTypeTrait;

class Mouse extends AbstractDevice
{
    use HasTypeTrait;

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
        $array["leftHanded"] = $this->getLeftHanded();
        return $array;
    }
}
