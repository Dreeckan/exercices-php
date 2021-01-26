<?php
spl_autoload_register(function ($class) {
    require_once "$class.php";
});

use classes\ComicBook;
use classes\Book;

$books = [];

$comicBook = new ComicBook;
$comicBook->setCountPages(152);
$comicBook->setIsbn(9791026817710);
$comicBook->setTitle('La chute de Tír na Nóg');

$book = new Book;
$book->setCountPages(464);
$book->setIsbn(9782940426379);
$book->setTitle('Caliban et la sorcière');


echo ''.$comicBook->getTitle().' (ISBN : '.$comicBook->getIsbn().') : '.$comicBook->getCountPages().' pages </br>';

echo ''.$book->getTitle().' (ISBN : '.$book->getIsbn().') : '.$book->getCountPages().' pages </br>';