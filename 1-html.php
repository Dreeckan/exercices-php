<?php

$shoes = [
    [
        'name'  => 'Heracles air max ++',
        'price' => 120.50,
        'stock' => 12,
    ],
    [
        'name'  => 'Zeus de chantier',
        'price' => 115.32,
        'stock' => 75,
    ],
    [
        'name'  => 'Hermes ultra fast',
        'price' => 75,
        'stock' => 5,
    ],
    [
        'name'  => 'Poseidon étanches',
        'price' => 58.25,
        'stock' => 40,
    ],
    [
        'name'  => 'Hadès méga-dark',
        'price' => 55.12,
        'stock' => 32,
    ],
];

function addPromo($prix, $reduc)
{
    if ($prix > 100) {
        $prix * (1 - ($reduc / 100)) . '€';
        return  number_format($prix, 2, ',', '&nbsp;') . "€";
    }
};



?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr> 
          <th>Nom</th>
          <th>Prix</th>
          <th>Reduction</th>
          <th>Stock</th>
          <th>Lien</th>
        </tr>
      <?php
      /** @var array $shoe */
      foreach ($shoes as $shoe) {
          ?>
          <tr  style="color: <?php
               if ($shoe['stock'] <20) {
                   echo 'red';
               } ?>;">
               <td>
                   <?= $shoe['name']; ?>
               </td>
          
                <td>
                   <?= $shoe['price'] . "€"; ?>
               </td>
                <td>
                   <?= addPromo($shoe['price'], 10); ?>
               </td>

                <td>
                   <?= $shoe['stock']; ?>
               </td>
           
               <td>
                   <a href="2-superglobales.php?stock=<?=$shoe['stock']?>">Voir</a>
               </td>
          </tr>
           
               

               
    <?php
      }
      ?>
    </table>

</body>
</html>