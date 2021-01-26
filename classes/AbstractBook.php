<?php

// Une classe abstraite est une sorte de modèle sur lequel sur base les futures classes filles, on ne peut pas créer d'objet à partir de celle-ci, elle reste le plan de fabrication qu'on viendra surcharger avec d'autres propriétés ou méthodes des classes filles

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

    // met à jour le contenu de la propriété `countPages` à partir de la variable `$countPages`

    /**
     * @param int $countPages
     *
     * @return $this
     */

    public function setCountPages(int $countPages)
    {
        $this->countPages = $countPages;
        return $this;
    }

    // renvoie le contenu de la propriété `countPages`

    /**
     * @return int
     */
    public function getCountPages():int
    {
        return $this->countPages;
    }

    // met à jour le contenu de la propriété `isbn` à partir de la variable `$isbn`

    /**
     * @param string $isbn
     *
     * @return $this
     */

    public function setIsbn(string $isbn)
    {
        $this->isbn = $isbn;
        return $this;
    }

    // renvoie le contenu de la propriété `isbn`

    /**
     * @return string
     */
    public function getIsbn():string
    {
        return $this->isbn;
    }
    

    // met à jour le contenu de la propriété `title` à partir de la variable `$title`

    /**
     * @param string $title
     *
     * @return $this
     */

    public function setTitle(string $title)
    {
        $this->title = $title;
        return $this;
    }

    // renvoie le contenu de la propriété `title`

    /**
     * @return string
     */
    public function getTitle():string
    {
        return $this->title;
    }

    // afficher le contenu des objets

    public function show()
    {
        echo $this->title.' ('.$this->isbn.') '.': '.$this->countPages.' pages </br>';
    }
}
