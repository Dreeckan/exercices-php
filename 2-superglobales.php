<?php
echo $_GET['stock'];
if (empty($_GET['stock'])) {
    header("location: 1-html.php");
}
?>

/********************** 
* FORM HTML
**********************/

<form action="" method="POST">
    <div>
        <label for="email">Un champ email</label>
        <input type="email" id="email">
    </div>
    <label for="quantity">Number</label>
    <input type="number" id="quantity" name="quantity"
       min="1" max=<?php echo $_GET['stock'] ?> ><br>
       <input type="submit" value="Envoyer le formulaire">
</form>

<?php

if (!empty(['stock'])) {
    $commande = trim($_GET['stock']);
} else {
    echo 'Il n\'y a pas assez de stock pour répondre à votre demande';
}

if (isset($_POST['email'])) {
    $email = trim($_POST['email']);
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Veuillez entrer un email valide';
    }
}

session_start();
if ($error != 1) {
    if (isset($_POST['mail']) && isset($_POST['stock'])) {
        $_SESSION['mail'] = $mailValide;
        $_SESSION['commande'] = $commandeValide;
    }
}

?>