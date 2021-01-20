<?php

namespace Component;

class GraphicCard extends AbstractComponent
{
    protected $graphicGpu;

    public function getGraphicGpu()
    {
        return $this->graphicGpu;
    }

    public function setGraphicGpu($graphicGpu)
    {
        $this->graphicGpu = $graphicGpu;
    }
}
