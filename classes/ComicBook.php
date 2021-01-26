<?php

class ComicBook extends AbstractBook
{
    public function __construct()
    {
        parent::__construct();
        $this->setCountPages(152);
    }
}