<?php

namespace Component;

class Ram extends AbstractComponent
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
