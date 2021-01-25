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
]; ?>

<table>
    <?php foreach ($shoes as $shoe) {
        if ($shoe['stock'] <= 20) {
            $color = "red";
        } else {
            $color = "blue";
        }

    ?>
        <tr style="color: <?php echo $color; ?>">
            <td> <?php echo $shoe['name']; ?>
            </td>
            <td> <?php echo $shoe['price'];
                    if ($shoe['price'] > 100) {
                        echo " soldé à ";
                        echo addpromo($shoe['price']);
                        echo "€";
                    } ?> </td>
            <td> <?php echo $shoe['stock']; ?> </td>
            <td> <a href="2-superglobales.php?stock=<?php echo $shoe['stock']; ?>"> Ajouter </a> </td>

        </tr>

    <?php } ?>
</table>


<?php
function addpromo($item)
{
    $prixRemise = $item / 1.10;
    return number_format($prixRemise, 2, ',', ' ');
}
