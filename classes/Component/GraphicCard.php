<?php

namespace Component;

use Traits\HasTypeTrait;

class GraphicCard extends AbstractComponent
{
    use HasTypeTrait;

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
