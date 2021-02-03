<?php

namespace Component;


class GraphiCard extends AbstractComponent
{

    protected $videoRam;

    public function getVideoRam()
    {
        return $this->videoRam;
    }

    public function setVideoRam($vr)
    {
        $this->videoRam = $vr;
    }

    public function jsonSerialize(): array
    {
        $parent = parent::jsonSerialize();
        $parent['videoRam'] = $this->getVideoRam();
        return $parent;
    }
}
