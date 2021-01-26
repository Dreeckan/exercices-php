
<?php

spl_autoload_register(function ($class) {
    // Dé-commenter la ligne ci-dessous si vous utilisez un Mac avec MAMP
    // $class = str_replace($class, '\\', '/');
    require_once "classes/$class.php";
});

// Et on les set en leur donnant un nom 

$livre = new ComicBook();
$livre->setCountPages(152);
$livre->setIsbn('9791026817710');
$livre->setTitle('La chute de Tír na Nóg');

$livre2 = new Book();
$livre2->setCountPages(464);
$livre2->setIsbn('9782940426379');
$livre2->setTitle('Caliban et la sorcière');

echo $livre->getTitle();
echo ' (';
echo $livre->getIsbn();
echo ') ';
echo ': ';
echo $livre->getCountPages();
echo ' pages <br />';
echo $livre2->getTitle();
echo ' (';
echo $livre2->getIsbn();
echo ') ';
echo ': ';
echo $livre2->getCountPages();
echo ' pages <br />';
