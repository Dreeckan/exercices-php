<?php

spl_autoload_register(function ($class) {
    // Dé-commenter la ligne ci-dessous si vous utilisez un Mac avec MAMP
    // $class = str_replace($class, '\\', '/');
    require_once "$class.php";
});

use classes\ComicBook;
use classes\Book;

$comicBook = new ComicBook;
$comicBook->setCountPages(152);
$comicBook->setIsbn(9791026817710);
$comicBook->setTitle('La chute de Tír na Nóg');

$book = new Book;
$book->setCountPages(464);
$book->setIsbn(9782940426379);
$book->setTitle('Caliban et la sorcière');

$book->getTitle();
$book->getIsbn(); 
$book->getCountPages();
;
?>
<?=$book->getTitle()?>( <?=$book->getIsbn()?>) : <?= $book->getCountPages();?>
