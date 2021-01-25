<?php
function reduction($reduc)
{
    if ($reduc > 100) {
        $remise = $reduc / 1.10;
        return number_format($remise, 2, ',', ' ');
    }
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
    <thead>
        <tr>
            <?php
            foreach ($shoes[0] as $key => $value) { ?>
                <th><?= $key ?></th>
            <?php } ?>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($shoes as $value) {

            /**
             * les variables recupères et stock les valeurs du tableau shoes.
             */
            $name = $value['name'];
            $price = $value['price'];
            $stock = $value['stock'];
        ?>
            <tr <?php if ($stock < 20) {
                ?> style="color:#ff0000" ; <?php
                                        } ?>>
                <td><?php echo $name ?></td>
                <td><?php echo $price;
                    echo "€";
                    if ($price > 100) {
                        echo " soldé à :";
                        echo reduction($price);
                        echo "€";
                    }
                    ?></td>
                <td><?php echo $stock ?></td>
                <td><a href="2-superglobales.php?stock=<?php echo $stock; ?>">Acheter</a></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>