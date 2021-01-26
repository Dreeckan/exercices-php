<?php

namespace classes;

class Book extends AbstractBook {
    
    public function __constructor()
    {
        parent::__constructor();
        $this->countPages = 200;
    }
}
