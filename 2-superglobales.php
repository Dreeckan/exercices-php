<?php
$stock = $_GET["stock"];

echo "il reste";
echo $stock;
echo " exemplaires de ce modèle";

if (empty($stock)) {
    header('Location: 1-html.php');
}

$_SESSION["stock"] = $stock;

?>
<form action="">
    <div>
        <label for="test">Un champ de test</label>
        <input type="text" id="test">
    </div>
    <div>
        <label for="email">Un champ email</label>
        <input type="email" id="email">
    </div>
</form>