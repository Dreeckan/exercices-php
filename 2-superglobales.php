<?php
session_start();
$errorMessages = [];
$error = false;
if (isset($_GET['stock'])) {
    if (empty($_GET['stock'])) {
        header('Location: index.php');
    } else {
        $_SESSION['stock'] = $_GET['stock'];
    }
}
if (isset($_POST['quantity'])) {
    if ($_POST['quantity'] > $_SESSION['stock']) {
        $errorMessages[] = 'Il n\'y a pas assez de stock pour répondre à votre demande';
        $error = true;
    }
}
if (isset($_POST['mail'])) {
    if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
        $errorMessages[] = 'L\'adresse email '.$_POST['mail'].' n\'est pas considérée comme valide';
        $error = true;
    }
}

if (isset($_POST['quantity']) && isset($_POST['mail']) && !$error) {
    $_SESSION['quantity'] = $_POST['quantity'];
    $_SESSION['email'] = $_POST['mail'];
}

?>
<div>
    <?php
    foreach ($errorMessages as $message) {
        echo '<p>'.$message.'</p>';
    }
    ?>
</div>
<form action="" method="POST">
    <div>
        <label for="stock">Un champ de test</label>
        <input type="number" id="stock" name="quantity">
    </div>
    <div>
        <label for="email">Un champ email</label>
        <input type="text" id="email" name="mail">
    </div>
    <button type="submit">envoyer</button>
</form>