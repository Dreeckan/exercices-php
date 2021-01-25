<?php

require_once 'includes/autoload.php';

$comicBook = new ComicBook();
$comicBook->setCountPages(152);
$comicBook->setIsbn('9791026817710');
$comicBook->setTitle('La chute de Tír na Nóg');

$book = new Book();
$book->setCountPages(464);
$book->setIsbn('9782940426379');
$book->setTitle('Caliban et la sorcière');


//TitreDuLivre (Isbn) : countPages pages <br />