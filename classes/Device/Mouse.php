<?php
namespace Device;

class Mouse extends AbstractDevice
{
    
    /**
     * @var bool
     */

    public $leftHanded;

    public function getLeftHanded(): bool
    {
        return $this->leftHanded;
    }
    public function setLeftHanded(bool $leftHanded)
    {
        $this->leftHanded = $leftHanded;
        return $this;
    }
    public function jsonSerialize()
    {
        parent::jsonSerialize();

        return [
            'Mouse' => [
                'name' => $this->name,
                'brand' => $this->brand,
                'leftHanded' => $this->leftHanded
            ]
        ];
    }
}
