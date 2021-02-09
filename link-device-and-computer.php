<?php

include "includes/connect.php";

 if (!$isDone) {
     throw new Exception('Erreur lors de l\'insertion de la donnée : ' . $component->getName());
 }
