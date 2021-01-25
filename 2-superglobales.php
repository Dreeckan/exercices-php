<?php
  
$_GET['stock'];

echo $_GET['stock'];

if (empty($_GET['stock'])) {
    header("location: 1-html.php");
}

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

