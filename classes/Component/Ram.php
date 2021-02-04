<?php

namespace Component;

use Traits\HasTypeTrait;

class Ram extends AbstractComponent
{
    use HasTypeTrait;

    /**
     * @var int
     */
    protected $size;

    /**
     * @param int $size
     *
     * @return $this
     */

    public function setSize(int $size)
    {
        $this->size = $size;
        return $this;
    }

    /**
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        $array = parent::jsonSerialize();
        $array["size"] = $this->getSize();
        return $array;
    }
}
