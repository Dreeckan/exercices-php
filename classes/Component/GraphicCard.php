<?php

namespace Component;

class GraphicCard extends AbstractComponent
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
    protected $rtx;

    /**
     * @param bool $rtx
     *
     * @return $this
     */

    public function setRtx(bool $rtx)
    {
        $this->rtx = $rtx;
        return $this;
    }

    /**
     * @return bool
     */
    public function getRtx()
    {
        return $this->rtx;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        $array = parent::jsonSerialize();
        $array["rtx"] = $this->getRtx();
        return $array;
    }
}
