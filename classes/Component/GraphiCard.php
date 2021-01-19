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
}
