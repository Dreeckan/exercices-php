<?php

abstract class AbstractBook
{
    /*
    une classe abstract est une classe modèle dont toute classe fille
    possédera les méthodes et attributs.
    */

    /** @var int */
    protected $countPages;

    /** @var string */
    protected $isbn;

    /** @var string */
    protected $title;

    //GETTERS renvoie le contenu de la propriété
    public function getCountPages(): int
    {
        return $this->countPages;
    }
    public function getIsbn(): string
    {
        return $this->isbn;
    }
    public function getTitle(): string
    {
        return $this->title;
    }
    //SETTERS définir / modifier / mettre à jour la propriété
    public function setCountPages(int $countPages): int
    {
        return $this->countPages = $countPages;
    }
    public function setIsbn(string $isbn): string
    {
        return $this->isbn = $isbn;
    }
    public function setTitle(string $title): string
    {
        return $this->title = $title;
    }
}
