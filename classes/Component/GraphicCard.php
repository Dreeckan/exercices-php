<?php
namespace Component;

class GraphicCard extends AbstractComponent
{
    /**
     * @var bool
     */

    public $rtx = false;

    public function getRtx(): bool
    {
        return $this->rtx;
    }
    public function setRtx(bool $rtx)
    {
        $this->rtx = $rtx;
        return $this;
    }
    public function jsonSerialize()
    {
        $array =  parent::jsonSerialize();
        $array['rtx'] = $this->rtx;
        return ['GraphicCard'=> $array];
    }
}
