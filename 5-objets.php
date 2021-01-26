<?php

require_once 'classes/AbstractBook.php';
require_once 'classes/Book.php';
require_once 'classes/ComicBook.php';

$comicBook = new ComicBook();
$comicBook->setIsbn("9791026817710");
$comicBook->setTitle("La chute de Tír na Nóg");
$comicBook->show();

$book = new Book();
$book->setCountPages(464);
$book->setIsbn("9782940426379");
$book->setTitle("Caliban et la sorcière");
$book->show();
