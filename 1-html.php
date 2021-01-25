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
function addReduc($item, $reduc)
{
    if ($item > 100) {
        return number_format($item - ($item * ($reduc / 100)), 2, ',', ' ').' € ( '.$reduc. ' % de reduction )';
    }
    return '';
}
?>

<table style="text-align: center;">
   <caption>Liste des chaussures</caption>
   <tr>
       <th>Nom</th>
       <th>Prix</th>
       <th>Nombre en stock</th>
       <th>reduction</th>
       <th>ajouter au panier</th>
   </tr>
   <?php
   foreach ($shoes as $shoe) {
       if ($shoe['stock'] < 20) {
           $color = 'style="color:red;"';
       } else {
           $color = '';
       }
       echo'<tr '.$color.'>
       <td>'.$shoe['name'].'</td>
       <td>'.$shoe['price'].'</td>
       <td>'.$shoe['stock'].'</td>
       <td>'.addReduc($shoe['price'], 10).'</td>
       <td><a href="2-superglobales.php?stock='.$shoe['stock'].'">💲</a></td>
       
   </tr>';
   }
   ?>
</table>