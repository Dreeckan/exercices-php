<?php
 session_start();

if (empty($_GET['stock'])) {
    header('Location: 1-html.php');
} else {
    $_SESSION['stock'] = $_GET['stock'];
}


if (isset($_POST['quantity'])) {
    if ($_POST['quantity'] > $_SESSION['stock']) {
        echo"   
<div style = 'color:red'>
  Il n'y a pas assez de stock pour répondre à votre demande
</div>";
    }
}

if (isset($_POST['mail'])) {
    if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL) == false) {
        echo"<div style = 'color:red'>L'email n'a pas le bon format</div>";
    }
}
 

$_SESSION['quantity']= $_POST['quantity'];
$_SESSION['mail']= $_POST['mail'];




?>

<form method="post" action="">
    <div>
        <label for="test">Quantité</label>
        <input name="quantity" type="number" id="test" min = "0">

    </div>
    <div>
        <label for="email">Email</label>
        <input name="mail" type="email" id="email">
    </div>
    <div>
    <button type="submit">SOUMETTRE</button>
    </div>
</form>
