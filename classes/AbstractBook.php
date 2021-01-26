<?php   

namespace classes;

abstract class AbstractBook { // Une classe abstraite et une classe "théorique" qui ne peut être crée directement !

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

    public function __constructor()
    {
        $this->countPages;
    }

    /**
     * Get the value of countPages
     */
    public function getCountPages()
    {
        return $this->countPages;
    }

    /**
     * Set the value of countPages
     *
     * @return  self
     */ 
    public function setCountPages($countPages)
    {
        $this->countPages = $countPages;

        return $this;
    }

     /**
      * Get the value of isbn
      */ 
     public function getIsbn()
     {
          return $this->isbn;
     }

     /**
      * Set the value of isbn
      *
      * @return  self
      */ 
     public function setIsbn($isbn)
     {
          $this->isbn = $isbn;

          return $this;
     }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }
}