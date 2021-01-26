<?php

abstract class AbstractBook
{
    /** @var int */
    protected $countPages;

    /** @var string */
    protected $isbn;

    /** @var string */
    protected $title;

    /**
     * AbstractBook constructor.
     */
    public function __construct()
    {
        $this->setTitle('');
        $this->setIsbn('');
        $this->setCountPages(100);
    }

    /**
     * @return int
     */
    public function getCountPages(): int
    {
        return $this->countPages;
    }

    /**
     * @param int $countPages
     *
     * @return AbstractBook
     */
    public function setCountPages(int $countPages): AbstractBook
    {
        $this->countPages = $countPages;

        return $this;
    }

    /**
     * @return string
     */
    public function getIsbn(): string
    {
        return $this->isbn;
    }

    /**
     * @param string $isbn
     *
     * @return AbstractBook
     */
    public function setIsbn(string $isbn): AbstractBook
    {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return AbstractBook
     */
    public function setTitle(string $title): AbstractBook
    {
        $this->title = $title;

        return $this;
    }
}