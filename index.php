<?php
spl_autoload_register(function ($class) {
    // $class = str_replace($class, '\\', '/'); pour Mac et MAMP
    require_once "classes/$class.php";
});


include '1-html.php';
include 'function.php';
/*
    countPages : 152
    isbn : 9791026817710
    title : La chute de Tír na Nóg

Pour le Book :

    countPages : 464
    isbn : 9782940426379
    title : Caliban et la sorcière

*/
$comicBook0 = new ComicBook;
$comicBook0->setCountPages(152);
$comicBook0->setIsbn('9791026817710');
$comicBook0->setTitle('La chute de Tír na Nóg');

$book0 = new ComicBook;
$book0->setCountPages(464);
$book0->setIsbn('9782940426379');
$book0->setTitle('La chute de Tír na Nóg');

echo $comicBook0->getCountPages(). '('.$comicBook0->getIsbn().')'.$comicBook0->getTitle().'<br />';
echo $book0->getCountPages(). '('.$book0->getIsbn().')'.$book0->getTitle().'<br />';
