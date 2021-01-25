

<?php
session_start();

if (empty($_GET['stock'])) {
    header('Location: 1-html.php');
} else {
    $_SESSION['stock'] = $_GET['stock'];
}


if (isset($_POST['quantity'])) {
    if ($_POST['quantity'] >= $_SESSION['stock']) {
        echo "
        <div>Il n'y a pas assez de stock pour répondre à votre demande🔮</div>";
    }
}

if (isset($_POST['mail'])) {
    if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)==false) {
        echo "<div>Email invalide🚽</div>";
    }
}

?>

<form method="post" action="">
    <div>
        <label for="quantity">Quantité</label>
        <input type="number" name="quantity" id="test" min = "0" max="">


    </div>
    <div>
        <label for="email">Email📧</label>
        <input type="email" name='mail' id="email">
    </div>
    <div>
         <button type="submit"> Envoyer </button>
    </div>
</form>


