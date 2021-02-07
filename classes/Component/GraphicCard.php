<?php

namespace Component;

class GraphicCard extends AbstractComponent
{
    /** @var bool */
    protected $rtx = false;

    /**
     * @return bool
     */
    public function isRtx(): bool
    {
        return $this->rtx;
    }

    /**
     * @param bool $rtx
     *
     * @return GraphicCard
     */
    public function setRtx(bool $rtx): GraphicCard
    {
        $this->rtx = $rtx;

        return $this;
    }

    public function getTableName(): string
    {
        return 'graphiccard';
    }

    public function getSpecificFields(): array
    {
        return [
            'rtx' => intval($this->isRtx()),
        ];
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        $ret = parent::jsonSerialize();
        $ret['rtx'] = $this->isRtx();

        return $ret;
    }
}