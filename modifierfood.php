
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODIFIERFOOD</title>
</head>
<body>
    
</body>
</html>
<?php include 'ConnexionBD.php' ?>

<?php

if (!empty($_FILES)) {
    // Récupérer les informations de la tâche à partir du formulaire

    $nom = $_POST['nom'];
    $description = $_POST['description'];
    $prix = $_POST['prix'];
   
  
    $img = file_get_contents ($_FILES['img']['tmp_name']);     // Ajout de l'image 
    $img = addslashes ($img);

    $id= $_POST['id'];
   

  
   // $img = file_get_contents ($_POST['img']['tmp_name']);
// Ajouter le contenu dans la table food dans la BD
                // Préparer la requête d'insertion
               
               
                   $sql =  "  UPDATE `food` SET `nom` = '$nom', `description` = '$description', `prix` = '$prix', `img` = '$img' WHERE `food`.`id` = '$id' " ;
               
            
                // Envoyer la requête
                $reponse = $pdo->exec($sql);
                if ($reponse) {
                    echo '<div class="alert alert-success" role="alert">';
                        echo "MOdification efféctuée avec succès";
                        echo '</br><a href="foodlist.php">Appuiez ici  pour continuer</a>';
                        
                    echo '</div>';
                } else {
                    echo '<div class="alert alert-danger" role="alert">';
                        echo "Problème de MOdification  de cette tâche";
                    echo '</div>';    
                }
                        
            }
         

           
         


                ?>
                
     