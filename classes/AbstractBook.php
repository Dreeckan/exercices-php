<?php

abstract class abstractBook //une classe abstraite est une classe ne pouvant être instanciée. Elle sert de "base" à d'autre objets
{
    /**
    * @var int
    * */
    protected $countPages;
    
    /**
    * @var string
    * */
    protected $isbn;
    
    /**
    * @var string
    * */
    protected $title;
    
    public function getCountPages()
    {
        return $this->countPages;
    }
    
    public function getIsbn()
    {
        return $this->isbn;
    }
    
    public function getTitle()
    {
        return $this->title;
    }
    
    public function setCountPages($countPages)
    {
        $this->countPages = $countPages;
    }
    
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    }
    
    public function setTitle($title)
    {
        $this->title = $title;
    }
} 