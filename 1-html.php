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

function calculReduc($price, $taux)
{
    if ($price > 100) {
        $price -= $price * ($taux / 100);
        return number_format($price, 2, ',', ' ') . "€";
    }
}


?>

<table>
<tr>
<th>Nom</th>
<th>Prix</th>
<th>Promo</th>
<th>Stock</th>
<th>Lien</th>
</tr>
<?php

foreach ($shoes as $shoe) {
    ?>

    <tr 

    <?php

    if ($shoe['stock'] < 20) {
        echo 'style="color: red"';
    } ?>

    >

                <td><?= $shoe['name'] ?></td>
                <td><?= $shoe['price'] ?> €</td>
                <td><?= calculReduc($shoe['price'], 10) ?></td>
                <td><?= $shoe['stock']?></td>
                <td><a href="2-superglobales.php?stock=<?=$shoe['stock']?>">Voir</a></td>
    </tr> 

<?php
}
?>

</table>
