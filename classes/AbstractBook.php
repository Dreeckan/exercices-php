<?php

declare(strict_types=1);

namespace Book;

// Une classe abstraite est une classe qui ne pourra pas être instanciée directement, on ne pourra pas la manipuler directement comme un objet.
abstract class AbstractBook
{
    /**
     * @var int
     */
    protected $countPages;

    /**
     * @var string
     */
    protected $isbn;

    /**
     * @var string
     */
    protected $title;

    public function __construct()
    {
        $this->countPages = 100;
        $this->isbn = '';
        $this->title = '';

    }
    
    //Cette fonction permet de renvoyer la variable $countPages concernant pour l'objet dans lequel est utilisée cette fonction.
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
    //Cette fonction permet de modifier la variable $countPages directement dans l'objet dans pour lequel on utilise cette fonction.
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