<?php

use Book\Book;
use Book\ComicBook;

include 'classes/AbstractBook.php';
include 'classes/Book.php';
include 'classes/ComicBook.php';

$comicBook0 = new ComicBook();
$comicBook0->setCountPages(152);
$comicBook0->setIsbn('9791026817710');
$comicBook0->setTitle('La chute de Tìr na Nòg');

$book0 = new Book();
$book0->setCountPages(464);
$book0->setIsbn('9782940426379');
$book0->setTitle('Caliban et la socière');

echo ''.$comicBook0->getTitle().' (ISBN : '.$comicBook0->getIsbn().') : '.$comicBook0->getCountPages().'pages </br>';

echo ''.$book0->getTitle().' (ISBN : '.$book0->getIsbn().') : '.$book0->getCountPages().'pages </br>';

