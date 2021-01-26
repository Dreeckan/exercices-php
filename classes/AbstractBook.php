<?php
// Une classe abstraite sert de base à d'autres classes 
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

    /**
     * Get the value of countPages
     *
     * @return  int
     */
    public function getCountPages()
    {
        return $this->countPages;
    }

    /**
     * Set the value of countPages
     *
     * @param  int  $countPages
     *
     * @return  self
     */
    public function setCountPages(int $countPages)
    {
        $this->countPages = $countPages;

        return $this;
    }

    /**
     * Get the value of isbn
     *
     * @return  string
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * Set the value of isbn
     *
     * @param  string  $isbn
     *
     * @return  self
     */
    public function setIsbn(string $isbn)
    {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * Get the value of title
     *
     * @return  string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @param  string  $title
     *
     * @return  self
     */
    public function setTitle(string $title)
    {
        $this->title = $title;

        return $this;
    }
    public function __construct()
    {
        $this->countPages = 100;
        $this->isbn = "";
        $this->title = "";
    }
}
