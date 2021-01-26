<?php 

namespace classes;

class ComicBook extends AbstractBook
{
     public function __constructor(){

       parent::__constructor(); 
       $this->countPages = 152;
    }
}