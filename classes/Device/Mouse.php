<?php

namespace Device;

class Mouse extends AbstractDevice
{
    /** @var bool */
    protected $leftHanded = true;

    /**
     * @return bool
     */
    public function isLeftHanded()
    {
        return $this->leftHanded;
    }

    /**
     * @param bool $leftHanded
     *
     * @return Mouse
     */
    public function setLeftHanded(bool $leftHanded)
    {
        $this->leftHanded = $leftHanded;

        return $this;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        $array = parent::jsonSerialize();
        $array['leftHanded'] = $this->isLeftHanded();

        return $array;
    }
}
