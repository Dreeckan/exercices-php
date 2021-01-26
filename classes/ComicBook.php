<?php

class ComicBook extends abstractBook
{
    public function __construct()
    {
        parent::__construct()
        $this->setCountPages(200);
    }
}