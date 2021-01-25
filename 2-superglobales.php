<?php
    session_start();
    var_dump( $_GET['stock']);

    $error = false;
    

    if(isset($_GET['stock']) && empty( $_GET['stock']))
    {
        header('Location : 1-html.php');
    } else {
        $_SESSION['stock'] = $_GET['stock'];
    }
    ?>
    
    
    <form action="" method="POST">
    <div>
        <label for="quantity">Quantité</label>
        <input type="number" id="test" name="quantity">
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email">
    </div>
    <input type="submit">
    </form>

<?php
    if(isset($_POST['quantity']) && $_POST['quantity'] > $_SESSION['stock'])
    {   
        $error = true;
        echo '<div class="alert alert-primary col-md-6 mx-auto my-5" role="alert">
                Il n y a pas assez de stock pour répondre à votre demande!
                </div>';
    }

    if(isset($_POST['email']) && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
    {
        $error = true;
        echo '<div class="alert alert-primary col-md-6 mx-auto my-5" role="alert">
                Veuillez entrer un email valide!
                </div>';
    }

    if(isset($_POST['quantity']) && isset($_POST['email']) && !$error)
    {
        $_SESSION['quantity'] = $_POST['quantity'];
        $_SESSION['email'] = $_POST['email'];
    }

    var_dump($_SESSION);