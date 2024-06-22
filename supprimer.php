<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer food</title>
</head>
<body>
    
    

<?php
    include "connexionBD.php";
    
    // Récupérer l'id de la tâche à supprimer
    $id = $_GET['id'];
    
 

    // Supprimer la tache avec l'id récupéré
    // Préparer la requête SQL
    $sql = "DELETE FROM food WHERE id = $id";

    // Exécuter la requête
   $rep = $pdo->exec($sql);

    // Retourner vers la page clients.php
  //  header('Location:taches.php');
  /*if ($rep) {
    echo '<div class="alert alert-success" role="alert">';
        echo "Suppression efféctuée avec succès";
    echo '</div>';

} else {
    echo '<div class="alert alert-danger" role="alert">';
        echo "Problème de Suppression !!!!!!";
    echo '</div>';    
}
      */

  
    header('Location:foodlist.php')
  
  


?>



</body>
</html>