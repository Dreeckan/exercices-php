<?php

require_once 'config.inc.php';

// $dsn = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');

$dsn = "mysql:dbname=$dbName;host=$dbHost";


try {
    $connection = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    exit('Connexion échouée : ' . $e->getMessage());
}
