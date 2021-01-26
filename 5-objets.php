<?php

require_once 'classes/AbstractBook.php';
require_once 'classes/Book.php';
require_once 'classes/ComicBook.php';

$bd = new ComicBook();
$bd->setTitle('La chute de Tír na Nóg');
$bd->setIsbn('9791026817710');
$bd->setCountPages(152);

$livre = new Book();
$livre->setTitle('Caliban et la sorcière');
$livre->setIsbn('9782940426379');
$livre->setCountPages(464);

echo $livre->getTitle();
echo ' (';
echo $livre->getIsbn();
echo ') :';
echo $livre->getCountPages();
echo '<br />';

echo $bd->getTitle();
echo ' (';
echo $bd->getIsbn();
echo ') :';
echo $bd->getCountPages();
echo '<br />';