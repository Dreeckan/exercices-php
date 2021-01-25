<?php
    if (empty($_GET['stock'])) {
        header('Location: 1-html.php');
    }
    $stock = $_GET['stock'];
    $_SESSION['stock'] = $stock;

    $errors = [];

    if (isset($_POST['quantity'])) {
        if (empty($_POST['quantity'])) {
            $errors[] = "Veuillez saisir une quantité";
        } elseif ($_POST['quantity'] > $stock) {
            $errors[] = "Il n'y a pas assez de stock pour répondre à votre demande";
        }
    }

    if (isset($_POST['email'])) {
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Veuillez entrer un email valide";
        }
    }

    if (isset($_POST['email']) && isset($_POST['quantity']) && empty($errors)) {
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['quantity'] = $_POST['quantity'];
        var_dump($_SESSION);
    }

    foreach ($errors as $error) {
        echo $error.' <br />';
    }

?>

<form action="" method="post">
    <div>
        <label for="quantity">Une quantité</label>
        <input type="number" name="quantity" id="quantity">
    </div>
    <div>
        <label for="email">Un champ email</label>
        <input type="email" name="email" id="email">
    </div>
    <div>
        <button type="submit">Valider</button>
    </div>
</form>