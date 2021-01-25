<?php

session_start();

 $stock = $_GET['stock'];
if (empty($stock)) {
    header('Location: 1-html.php');
} else {
    $_SESSION['stock'] = (int) $stock;
}
var_dump($stock);


if (isset($_POST['quantity'])) {
    $quantity = trim($_POST['quantity']);
    if (empty($quantity)) {
        echo "<div>Veuillez rentrer une quantité</div>";
    }

    if ($quantity > $_SESSION['stock']) {
        echo "<div>Il n'y a pas assez de stock pour répondre à votre demande</div>";
    }
    $_SESSION['quantity'] = $quantity;

    if (isset($_POST['email'])) {
        $email = trim($_POST['email']);
        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo '<div>Veuillez entrer un email valide</div>';
        }
    }
    $_SESSION['email'] = $email;
}


?>

<form action="2-superglobales.php?stock=<?= $stock?>" method="post">
    <div>
        <label for="quantity">Quantité</label>
        <input type="number" name="quantity" id="quantity">
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
    </div>
    <div>
        <input type="submit" value="Envoyer">
    </div>
</form>