<?php
$stock = $_GET["stock"];

echo "il reste ";
echo $stock;
echo " exemplaires de ce modèle";

if (empty($stock)) {
    header('Location: 1-html.php');
}

$_SESSION["stock"] = $stock;

?>
<form method="post" action="">
    <div>
        <label for="stock"> Quantité souhaitée</label>
        <input type="number" id="stock" name="stock" min="1" max=<?php echo $stock ?>>
    </div>
    <div>
        <label for="mail">Email</label>
        <input type="text" id="mail" name="mail">
    </div>
    <div>
        <input type="submit">
    </div>
</form>

<?php
if (isset($_POST['mail'])) {
    $mail = $_POST['mail'];
    if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $error = 0;
        $mailValide = $mail;
        echo ("l'adresse mail est bien valide !");
    } else {
        $error = 1;
        $mailValide = ".";
        echo ("L'adresse mail n'est pas une adresse mail valide !");
    }
}

if (isset($_POST['stock'])) {
    $commande = $_POST['stock'];
    if ($commande <= $stock && $commande >= 1) {
        $commandeValide = $commande;
        $error = 0;
        echo " votre commande pour $commandeValide exemplaires a bien été prise en compte !";
    } else {
        $error = 1;
        $commandeValide = ".";
        echo "La quantité souhaité n'est pas disponible";
    }
}
session_start();
if ($error != 1) {
    if (isset($_POST['mail']) && isset($_POST['stock'])) {
        $_SESSION['mail'] = $mailValide;
        $_SESSION['commande'] = $commandeValide;
    }
}
