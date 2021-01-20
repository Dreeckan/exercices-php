<?php
/*
Pour le namespace, il faut les déclarer dans la classe (le namespace correspond au nom du dossier).
Dans index.php, quand vous voulez appeler une de vos classes, il faut en ajouter le namespace.
Par exemple, pour la classe Desktop, qui se trouve dans le dossier Computer, il faut appeler
la classe Computer\Desktop (ex : new Computer\Desktop)
Vous pouvez directement le faire comme ça, sinon VSCode peut vous montrer une autre astuce :
ajouter un use Computer\Desktop et vous pourrez faire un new Desktop() directement
*/

use Component\Cpu;
use Component\GraphicCard;
use Component\MotherBoard;
use Component\Ram;
use Computer\Desktop;
use Computer\Laptop;
use Computer\Tablet;
use Devices\Keyboard;
use Devices\Mouse;
use Devices\Speaker;
use Validator\ComputerValidator;

/*
Cette fonction nous permet d’enregistrer une ou plusieurs fonctions qui vont être mises
 dans une file d’attente et que le PHP va appeler automatiquement dès qu’on va essayer
  d’instancier une classe
*/

include "includes/autoload.php";


$desktopOne = new Desktop(['desktop__component'], ['desktop__devices'], 'desktop__Name');
//var_dump($desktopOne);
$laptopOne = new Laptop(['laptop__component'], ['laptop__devices'], 'laptop__Name');
//var_dump($laptopOne);
$tabletOne = new Tablet(['tablet__component'], ['tablet__devices'], 'tablet__Name');
//var_dump($tabletOne);

//add components0 (name, brand)
$ram0 = new Ram('16 GB', 'Dell');
$cpu0 = new Cpu('i7', 'Intel');
$carteGraph0 = new GraphicCard('GTX 1650', 'MSI');
$carteMere0 = new MotherBoard('B550', 'MSI');
//add devices0 (name, brand)
$souris0 = new Mouse('Razorless', 'Razor');
$clavier0 = new Keyboard('K280', 'Logitech');
$son0 = new Speaker('Z333', 'Logitech');


$laptoptwo = new Laptop([$souris0,$clavier0,$son0], [$ram0,$carteGraph0,$carteMere0,$cpu0], 'Asus');
//var_dump($laptoptwo);

$validator = new ComputerValidator();
var_dump($validator->validate($laptoptwo));
