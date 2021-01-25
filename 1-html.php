<?php

function promoShoe($price)
{
    if ($price < 100) {
        return number_format($price, 2, ',', '');
    }
    return number_format($price / 1.1);
}


function afficheProduit($shoe)
{
    if ($shoe['stock'] <= 20) {
        $color = "red";
    } else {
        $color = "blue";
    }
    echo '
    <tr>
        <td style="color:'.$color.'">
            '.$shoe['name'].
        '</td>
        <td style="color:'.$color.'">
            '.$shoe['price'].'€
        </td>
        <td>';
    if ($shoe['price'] > 100) {
        echo promoShoe($shoe['price']).'€';
    }
    echo '        
        </td>
        <td style="color:'.$color.'">
            '.$shoe['stock'].'
        </td>
        <td>
            <a href="2-superglobales.php?stock='.$shoe['stock'].'">Lien</a>
        </td>
    </tr>';
}

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
?>
<table>
    <tr>
        <th>Nom</th>
        <th>Prix</th>
        <th>Prix Réduit</th>
        <th>Stock</th>
        <th>Lien</th>    
    </tr>
<?php
foreach ($shoes as $shoe) {
    ?>
<?php
afficheProduit($shoe);
}
?>
</table>



