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

// fonction réduction pour calculer prix soldé

function reduction($price, $tauxReduction)
{
    $price = $price - $price * $tauxReduction / 100;
    return $price;
}

// affiche de la liste

echo "  <table>
            <tr>
                <th>Nom</th>
                <th>Prix</th> 
                <th>Prix soldé</th>
                <th>Stock</th>
                <th>Produit</th>
            </tr>";

foreach ($shoes as $item) {
    $item['stock'] < 20 ? $color = "red" : $color = "black";

    echo "  <tr>
                    <td style='color:".$color."'>".$item['name']."</td>
                    <td style='color:".$color."'>".number_format($item['price'], 2, ',', ' ')." €</td>";
    if ($item['price'] > 100) {
        echo
            "<td style='color:".$color."'>".number_format(reduction($item['price'], 10), 2, ',', ' ')." €</td>";
    } else {
        echo "<td style='color:".$color."'>non soldé</td>";
    }
    echo "<td style='color:".$color."'>".$item['stock']."</td>
                    <td style='color:".$color."'><a href='2-superglobales.php?stock=".$item['stock']."'>".$item['name']."</a></td>
                </tr>";
}

echo "</table>";
