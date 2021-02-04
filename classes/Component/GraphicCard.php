<?php

namespace Component;

class GraphicCard extends AbstractComponent
{
    /** @var bool */
    protected $rtx = false;

    /**
     * @return bool
     */
    public function isRtx()
    {
        return $this->rtx;
    }

    /**
     * @param bool $rtx
     *
     * @return GraphicCard
     */
    public function setRtx(bool $rtx)
    {
        $this->rtx = $rtx;

        return $this;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        $array = parent::jsonSerialize();
        $array['rtx'] = $this->isRtx();

        return $array;
    }
}
