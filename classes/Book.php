<?php
declare(strict_types=1);

namespace Book;

class Book extends AbstractBook
{
     public function __construct()
     {
        parent::__construct();
        $this->setCountPages(200);
    }
}