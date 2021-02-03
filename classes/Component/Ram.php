<?php

namespace Component;

class Ram extends AbstractComponent
{
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
        $array["size"] = $this->size;
        $array["type"] = self::class;
        return $array;
    }
}
