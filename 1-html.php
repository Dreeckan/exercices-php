<?php

function sale($price, $tauxReduction)
{
    $salePrice = $price - ($price * $tauxReduction/100);

    return $salePrice;
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
        <th>Prix (en euros)</th>
        <th>Nombre en stock</th>
        <th>Prix en réduction (en euros)</th>
    </tr>
    <?php
            

        foreach ($shoes as $shoe)
        {
            if ($shoe['stock'] <= 20)
            {
                $colorStock = "red";
            } else
            {
            $colorStock = "black";
            }

            if ($shoe['price'] > 100)
            {
                sale($shoe['price'], 10);
            }

            echo '<tr style = "color: '.$colorStock.'">
                    <td><a href ="2-superglobales.php?stock='.$shoe['stock'].'">'.$shoe['name'].'</a></td>
                    <td>'.number_format($shoe['price'], 2, ',', ' ').'€</td>
                    <td >'.$shoe['stock'].' en stock</td>';

                    if ($shoe['price'] > 100)
                    {
                        echo '<td> '.number_format(sale($shoe['price'],10), 2, ',', ' ').'€</td>';
                    }
                    
                 '</tr>';
        }
    ?>
</table>
