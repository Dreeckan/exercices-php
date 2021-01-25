<?php
session_start();

$stock = $_GET["stock"];

if (empty($_GET["stock"])) {
    header('1-html.php');
} else {
    $_SESSION["stock"] = $stock;
}

$errorMessage = '';

if (!empty($_POST)) {
    $quantity = $_POST['quantity'];
    $email = $_POST['email'];
   
    if ($quantity > $stock) {
        $errors[] = "Il n'y a pas assez de stock pour répondre à votre demande";
    }
 
    if (empty($email)) {
        $errors[] = 'Veuillez entrer un email valide';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Veuillez entrer un email valide';
    }

}

if (!empty($errors)) {
   $allErrors = join('<br/>', $errors);
   $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
} else {
    $_SESSION["quantity"] = $quantity;
    $_SESSION["email"] = $email;
}

echo '
'.$errorMessage.'';?>

<form action="2-superglobales.php?stock=<?php echo $stock?>" method="post">
    <div>
        <label for="test">Un champ de test</label>
        <input type="number" id="test" name="quantity">
    </div>
    <div>
        <label for="email">Un champ email</label>
        <input type="email" id="email" name="email">
    </div>
    <button type="submit">Envoyer</button>   
</form>