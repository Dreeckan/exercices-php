<?php

include 'includes/autoload.php';
include 'objects.php';

use Validator\ComputerValidator;


//var_dump($c, $c2, $c3, $c4);

// On instancie la classe ComputerValidator
$validator = new ComputerValidator();
// On regarde si l'objet $c est valide
$isValid = $validator->validate($c);
//var_dump($isValid);
// On regarde si l'objet $c2 est valide
$isValid = $validator->validate($c2);
//var_dump($isValid);
// On regarde si l'objet $c3 est valide
$isValid = $validator->validate($c3);
//var_dump($isValid);
// On regarde si l'objet $c4 est valide
$isValid = $validator->validate($c4);
//var_dump($isValid);

if (isset($_GET['api'])) {
    header('Content-type: application/json');

    echo json_encode([
        $c,
        $c2,
        $c3,
        $c4,
    ]);
    exit();
}

echo json_encode($c).'<br />';
echo json_encode($c2).'<br />';
echo json_encode($c3).'<br />';
echo json_encode($c4).'<br />';
