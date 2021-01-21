<?php

namespace Component;


class GraphiCard extends AbstractComponent
{
    /**
     * @var string
     */
    protected $videoRam;

    public function getVideoRam()
    {
        return $this->videoRam;
    }

    public function setVideoRam(string $vr)
    {
        $this->videoRam = $vr;
    }

    public function jsonSerialize()
    {
        $ret = parent::jsonSerialize();
        $ret["JvideoRam"] = $this->getVideoRam();
        return $ret;
    }
}
