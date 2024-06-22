<?php include 'ConnexionBD.php' ;



    $uname = $_GET['nom'];
   $foodid = $_GET['id'];
 

    $sql = " INSERT INTO `panier` (`username`, `foodid`) VALUES ('$uname', '$foodid') ";
    $reponse = $pdo->exec($sql);


    if ($reponse) {
        echo '<div class="alert alert-success" role="alert">';
            echo "commande  efféctuée avec succès";
            
        echo '</div>';
        
          header("Refresh:5;url=acceuil.php?nom=$uname");
        echo 'Redirection apres 5 secondes ;) ';

    } else {
        echo '<div class="alert alert-danger" role="alert">';
            echo "vous avez deja commander ce plat :) ";
            header("Refresh:5;url=acceuil.php?nom=$uname");
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

























