
<?php 
session_start();
$stock = null;
if (empty($_GET['stock'])) {
    header('Location: 1-html.php');
} else {
    $_SESSION['stock'] = $_GET['stock'];
    $stock =  $_SESSION['stock'];
}
?>

<form method="POST" action="">
    <div>
        <label for="test">Quantity</label>
        <input type="text" id="test" name='quantity'>
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name='email'>
    </div>
    <button type="submit">Envoyer</button>
</form>

<?php 
if (isset($_POST['quantity']) && !empty($_POST['quantity'])) {
    if ($_POST['quantity'] >= $stock ) {
        echo "<p>Il n'y a pas assez de stock pour répondre à votre demande</p>";
    } else {
        if(isset($_POST['email']) && !empty($_POST['email'])) {
            if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == false ) {
                echo "<p>Veuillez entrer un email valide</p>";
            } else {
                $_SESSION['quantity'] = $_POST['quantity'];
                $_SESSION['email'] = $_POST['email'];
                echo "<p>PLUS ULTRA !</p>";
            }
        }
    }
}


?>