<?php

class ComicBook extends AbstractBook
{
    function __construct()
    {
        parent::__construct();
        $this->setCountPages(200);
    }
}
