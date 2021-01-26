<?php
declare(strict_types=1);

namespace Book;

class ComicBook extends AbstractBook
{
     public function __construct()
     {
        parent::__construct();
        $this->setCountPages(152);
    }
}