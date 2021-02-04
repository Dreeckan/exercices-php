<?php

$dbName = 'exo-8';
$dbUser = 'root';
$dbPass = '';
$dbHost = 'localhost';
$dbDsn = 'mysql:dbname='.$dbName.';host='.$dbHost;

try {
    $connection = new PDO($dbDsn, $dbUser, $dbPass);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
