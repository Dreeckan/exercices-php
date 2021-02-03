<?php

namespace Component;


class Ram extends AbstractComponent
{

    protected $memoire;

    public function getMemoire()
    {
        return $this->memoire;
    }

    public function setMemoire($r)
    {
        $this->memoire = $r;
    }

    public function jsonSerialize(): array
    {
        $parent = parent::jsonSerialize();
        $parent['memoire'] = $this->getMemoire();
        return $parent;
    }
}
