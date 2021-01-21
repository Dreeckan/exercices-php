<?php

namespace Component;


class Ram extends AbstractComponent
{
    /**
     * @var int
     */
    protected $memoire;

    public function getMemoire()
    {
        return $this->memoire;
    }

    public function setMemoire($r)
    {
        $this->memoire = $r;
    }
    public function jsonSerialize()
    {
        $ret = parent::jsonSerialize();
        $ret["jMemoire"] = $this->getMemoire();
        return $ret;
    }
}
