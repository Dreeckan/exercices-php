<?php
/*
Pour le namespace, il faut les déclarer dans la classe (le namespace correspond au nom du dossier).
Dans index.php, quand vous voulez appeler une de vos classes, il faut en ajouter le namespace.
Par exemple, pour la classe Desktop, qui se trouve dans le dossier Computer, il faut appeler
la classe Computer\Desktop (ex : new Computer\Desktop)
Vous pouvez directement le faire comme ça, sinon VSCode peut vous montrer une autre astuce :
ajouter un use Computer\Desktop et vous pourrez faire un new Desktop() directement
*/

use Component\Ram;
use Computer\Desktop;
use Computer\Laptop;
use Computer\Tablet;
use Devices\Mouse;

/*
Cette fonction nous permet d’enregistrer une ou plusieurs fonctions qui vont être mises
 dans une file d’attente et que le PHP va appeler automatiquement dès qu’on va essayer
  d’instancier une classe
*/

include "includes/autoload.php";


$desktopOne = new Desktop(['desktop__component'], ['desktop__devices'], 'desktop__Name');
var_dump($desktopOne);
$laptopOne = new Laptop(['laptop__component'], ['laptop__devices'], 'laptop__Name');
var_dump($laptopOne);
$tabletOne = new Tablet(['tablet__component'], ['tablet__devices'], 'tablet__Name');
var_dump($tabletOne);

$Razorless = new Mouse('Razorless', 'Razor');
$Ramless = new Ram('Razorless', 'Razor');

$laptoptwo = new Laptop([$Razorless], [$Ramless], 'laptop__Razor');
var_dump($laptoptwo);
// promis j'ajouterais des exemple plus concret oO
