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
?>

<table>
    <tr>
        <th>Nom</th>
        <th>Prix</th>
        <th>Prix avec réduction</th>
        <th>Quantité</th>
    </tr>
    <?php
        foreach ($shoes as $shoe) {
            $color = null;
            if ($shoe['stock'] < 20) {
                $color = 'red';
            }
    ?>
        <tr <?php if ($color) { echo 'style="color: '.$color.'"';}?>>
            <td>
                <a href="2-superglobales.php?stock=<?php echo $shoe['stock']; ?>">
                    <?= $shoe['name']; ?>
                </a>
            </td>
            <td>
                <?= number_format($shoe['price'], 2, ',', ' '); ?>€
            </td>
            <td>
                <?php
                if ($shoe['price'] >= 100) {
                    echo number_format(reduction($shoe['price'], 10), 2, ',', ' ').'€';
                }
                ?>
            </td>
            <td>
                <?= $shoe['stock']; ?>
            </td>
        </tr>
    <?php } ?>
</table>

<?php

/**
 * @param float $price
 * @param float $tauxReduction
 *
 * @return float
 */
function reduction(float $price, float $tauxReduction): float
{
    // 1 + ($tauxReduction / 100) ne doit pas être égal à 0
    if ($tauxReduction == -100) {
        return 0.0;
    }
    $valeurReduction = 1 + ($tauxReduction / 100);

    return $price / $valeurReduction;
}
