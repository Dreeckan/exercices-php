<?php

$shoes = [
    [
        'name'  => 'Heracles air max ++',
        'price' => 120.50,
        'stock' => 12,
    ],
    [
        'name'  => 'Zeus de chantier',
        'price' => 115.32,
        'stock' => 75,
    ],
    [
        'name'  => 'Hermes ultra fast',
        'price' => 75,
        'stock' => 5,
    ],
    [
        'name'  => 'Poseidon étanches',
        'price' => 58.25,
        'stock' => 40,
    ],
    [
        'name'  => 'Hadès méga-dark',
        'price' => 55.12,
        'stock' => 32,
    ],
];

function addPromo($prix, $reduc){
    if ($prix <= 100 ) return;
    return  number_format($prix * (1 - ($reduc / 100)),2,',', '') . '€';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<table>
    <thead>
        <tr style='font-weight : bold'>
            <td>Nom</td>
            <td>Prix</td>
            <td>Promo</td>
            <td>Stock</td>
            <td>Lien</td>
        </tr>
    </thead>
    <tbody>

        <?php 
    foreach ($shoes as $shoe){
        if ($shoe['stock'] < 20) {
            $color = 'red';
        } else {
            $color = null;
        }

        echo '
        <tr style="color : '.$color.'">
            <td>' .$shoe['name'] . '</td>
            <td>' .number_format($shoe['price'],2,',','') . '€</td>
            <td>' .addPromo($shoe['price'], 10) . '</td>
            <td>' .$shoe['stock'] . '</td>
            <td><a href="2-superglobales.php?stock='.$shoe['stock'].'">Lien</a></td>
        </tr>
        ';
    }?>
    
    </tbody>
</table>
</body>
</html>