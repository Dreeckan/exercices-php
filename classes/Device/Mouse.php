<?php

namespace Device;

class Mouse extends AbstractDevice
{
    /** @var bool */
    protected $leftHanded = true;

    /**
     * @return bool
     */
    public function isLeftHanded(): bool
    {
        return $this->leftHanded;
    }

    /**
     * @param bool $leftHanded
     *
     * @return Mouse
     */
    public function setLeftHanded(bool $leftHanded): Mouse
    {
        $this->leftHanded = $leftHanded;

        return $this;
    }

    public function getTableName(): string
    {
        return 'mouse';
    }

    public function getSpecificFields(): array
    {
        return [
            'leftHanded' => $this->isLeftHanded(),
        ];
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        $ret = parent::jsonSerialize();
        $ret['leftHanded'] = $this->isLeftHanded();

        return $ret;
    }
}