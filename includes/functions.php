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

function divide (int $diviseur, int $divise)
{
    if ($diviseur == 0) {
        return false;
    } else {
        $resultat = $divise / $diviseur
        return $resultat;
    }
}

function factor (int $number)
{
    if ($number == 0) {
        return 1;
    } else {
        $resultat = $number * factor($number - 1)
        return $resultat;
    }
}

$variable = $_GET['variable'];
if(isset($variable)) {
    echo '$variable'
} else {
    echo $_GET['variable'];
}

function UneFonction (int $parametre): int
{
    return $this->parametre * 2;
}

echo UneFonction($parametre = 2);