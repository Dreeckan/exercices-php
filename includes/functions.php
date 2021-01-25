<?php

function showShoes ($shoes)
{
    foreach ($shoes as $shoe) {
    ?>
        <tr style="color:<?php
            if ($shoe['stock']< 20) {
                echo 'red';
            } ?>">
        <td><a href='2-superglobales.php?stock=<?php echo $shoe["stock"]?>'><?= $shoe['name'] ?></a></td>
        <td><?= $shoe['price'];
    if ($shoe['price'] > 100) {
        sales($shoe['price'], 10);
    }   ?>
    </td>
        <td><?= $shoe['stock'] ?></td>
    </tr>
    <?php
    }
}

function sales(float $price, float $discount)
{
    return number_format(($price - ($price * $discount)/100), 2, ",", " ");
}