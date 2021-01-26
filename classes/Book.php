<?php

class Book extends AbstractBook
{
    public function __construct()
    {
        parent::__construct();
        $this->setCountPages(200);
    }
}