<?php

namespace Component;

class GraphicCard extends AbstractComponent
{
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
        $array["rtx"] = $this->rtx;
        return $array;
    }
}
