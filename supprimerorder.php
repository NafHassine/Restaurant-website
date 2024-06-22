<?php
    include "connexionBD.php";
    
    // Récupérer l'id de la tâche à supprimer
    $id = $_GET['id'];
    $uname = $_GET['nom'];
    
 

    // Supprimer la tache avec l'id récupéré
    // Préparer la requête SQL
        // = "DELETE FROM  panier WHERE id = $id  AND username = $uname" ;
    $sql =" DELETE FROM `panier` WHERE `panier`.`username` = '$uname' AND `panier`.`foodid` = '$id' " ;

    // Exécuter la requête
   $rep = $pdo->exec($sql);

   if ($rep) {
    echo '<div class="alert alert-success" role="alert">';
        echo "Suppression efféctuée avec succès";
        header("Refresh:5;url=panier.php?nom=$uname");
        echo 'Redirection apres 5 secondes ;) ';

    echo '</div>';

} else {
    echo '<div class="alert alert-danger" role="alert">';
        echo "Problème de Suppression !!!!!!";
        header("Refresh:5;url=panier.php?nom=$uname");
        echo 'Redirection apres 5 secondes ;) ';

    echo '</div>';    
}

   ?>
   <!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
   </head>
   <body>
    
   </body>
   </html>