<?php

$dsn = 'mysql:host=localhost;dbname=computer_exercice';
$user = 'root';
$password = 'root';

try {
    $connection = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    exit('Connexion échouée : ' . $e->getMessage());
}
