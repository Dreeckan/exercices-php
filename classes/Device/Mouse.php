<?php

namespace Device;

class Mouse extends AbstractDevice
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
