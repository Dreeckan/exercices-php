<?php

namespace Component;

class Ram extends AbstractComponent
{
    /** @var int */
    protected $size = 16;

    /**
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param int $size
     *
     * @return Ram
     */
    public function setSize(int $size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        $array = parent::jsonSerialize();
        $array['size'] = $this->getSize();

        return $array;
    }
}
