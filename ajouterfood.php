<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Food</title>
</head>
<body><style>
body{
        background: url('images/food.jpg') no-repeat;
        background-size: cover;
        display:grid;
        place-items:center;
        
        height: 100vh;
        }

.cat{
  padding: 20px;
  background-color:black;
  height:100%;
  width:100%;
  opacity: 0.6  ;
  }
  
  h2{
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  .var{

    display: flex;
    align-items: center;
    justify-content: space-between;
    height: 700px;
    width:100%;
  }
img{
  margin-left: auto;
  margin-right: auto;
  height:100%;
  width:100%;

}
.id{
  height:100%;
  width:100%;


}

input {
  font-size: 1.5rem !important;
  height: 65px !important
}

.cat h1{
  text-align:center;
  color:red;
}
h1{
color:white;
}

h3{
  color:white;  
}
input{
  color: white;
  height: 200%;
  padding: 20px;
}
</style>
<?php include 'ConnexionBD.php' ?>

<?php

if (!empty($_FILES)) {
    // Récupérer les informations de la tâche à partir du formulaire

    $nom = $_POST['nom'];
    $description = $_POST['description'];
    $prix = $_POST['prix'];
    $img = file_get_contents ($_FILES['img']['tmp_name']); // Ajout de l'image 
    $img = addslashes ($img);
   

  
   // $img = file_get_contents ($_POST['img']['tmp_name']);
// Ajouter le contenu dans la table food dans la BD
                // Préparer la requête d'insertion
                $sql = "INSERT INTO food (nom,description, prix , img) 
                        VALUES ('$nom', '$description', '$prix', '$img')";
                // Envoyer la requête
                $reponse = $pdo->exec($sql);
                if ($reponse) {
                    echo '<div class="alert alert-success" role="alert">';
                        echo "Insertion efféctuée avec succès";
                    echo '</div>';
                } else {
                    echo '<div class="alert alert-danger" role="alert">';
                        echo "Problème d'insertion de cette tâche";
                    echo '</div>';    
                }
                        
            }



                ?>
     
     


<form action="<?= $_SERVER['PHP_SELF']?>"  method="POST" enctype="multipart/form-data">

  <div class="var">
  <div class="cat">
    <h1><?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.0//EN'  'http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd'><svg height="46px" style="enable-background:new 0 0 110 110;" version="1.0" viewBox="0 0 110 110" width="110px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Artboard"/><g id="Multicolor"><g><circle cx="55" cy="55" r="55" style="fill:#25B7D3;"/></g><g><path d="M83,80c-0.615-1.333-1.698-2.394-3.043-2.982L65,73v-5.001l-3.243,3.241    c-1.125,1.125-2.651,1.757-4.242,1.757H55h-2.516c-1.591,0-3.116-0.632-4.242-1.757L45,67.999V73l-14.957,4.018    C28.698,77.606,27.615,78.667,27,80l-4,7h32h32L83,80z" style="fill:#FFFFFF;"/><path d="M70,49c-0.423,0-0.741,0.102-1.004,0.243c-0.007-0.767,0.034-1.515,0-2.243H41.063    c-0.045,0.965-0.062,1.966-0.063,3v12.343c0,1.061,0.422,2.079,1.172,2.829l6.071,6.068c1.125,1.125,2.651,1.757,4.242,1.757H55    h2.516c1.591,0,3.116-0.632,4.242-1.757l6.071-6.068c0.75-0.75,1.172-1.768,1.172-2.829v-3.53c2.226-0.873,3-4.66,3-7.59    C72,50.111,71,49,70,49z" style="fill:#BF8662;"/><g><circle cx="55" cy="84" r="2" style="fill:#F3B607;"/></g><g><circle cx="55" cy="77" r="2" style="fill:#F3B607;"/></g><path d="M41.063,47c-0.034,0.728-0.052,1.476-0.059,2.243C40.741,49.102,40.423,49,40,49    c-1,0-2,1.111-2,2.222c0,2.931,0.774,6.717,3,7.59v3.53c0,1.061,0.422,2.079,1.172,2.829l6.071,6.068    c1.125,1.125,2.651,1.757,4.242,1.757H55V47H41.063z" style="fill:#CC9978;"/><g><path d="M51,62h8c0,0,0,3-4,3S51,62,51,62z" style="fill:#9C6144;"/></g><g><path d="M51.994,50.997c0-1.104-0.896-2-2-2c-0.002,0-0.004,0-0.006,0     c0.001,0.021,0.006,0.041,0.006,0.062c0,1.103-0.892,1.996-1.994,2c0.033,1.075,0.91,1.938,1.994,1.938     C51.098,52.997,51.994,52.102,51.994,50.997z" style="fill:#3E3E3F;"/></g><g><path d="M61.987,50.997c0-1.104-0.896-2-2-2c-0.002,0-0.004,0-0.006,0     c0.001,0.021,0.006,0.041,0.006,0.062c0,1.103-0.892,1.996-1.994,2c0.033,1.075,0.91,1.938,1.994,1.938     C61.092,52.997,61.987,52.102,61.987,50.997z" style="fill:#3E3E3F;"/></g><g><g><path d="M72,31.5c0-3.59-2.91-6.5-6.5-6.5c-1.502,0-2.882,0.515-3.983,1.371      C60.067,24.333,57.691,23,55,23s-5.067,1.333-6.517,3.371C47.382,25.515,46.002,25,44.5,25c-3.59,0-6.5,2.91-6.5,6.5      c0,2.3,1.198,4.316,3,5.472V47h28V36.972C70.802,35.816,72,33.8,72,31.5z" style="fill:#F1F2F2;"/></g><g><rect height="9" style="fill:#E2E4E5;" width="2" x="61" y="36"/></g><g><path d="M55,47V23c-2.691,0-5.067,1.333-6.517,3.371C47.382,25.515,46.002,25,44.5,25      c-3.59,0-6.5,2.91-6.5,6.5c0,2.3,1.198,4.316,3,5.472V47H55z" style="fill:#FFFFFF;"/></g><g><rect height="9" style="fill:#E2E4E5;" width="2" x="54" y="36"/></g><g><rect height="9" style="fill:#E2E4E5;" width="2" x="47" y="36"/></g></g><polygon points="66,47 66,53 67,53 69,49 69,47   " style="fill:#3E3E3F;"/><polygon points="41,47 41,49 43,53 44,53 44,47   " style="fill:#3E3E3F;"/><g><g><path d="M55,60c-2-3-7-1-9,2c3,0,9,0,9,0V60z" style="fill:#3E3E3F;"/></g><g><path d="M55,60c2-3,7-1,9,2c-3,0-9,0-9,0V60z" style="fill:#3E3E3F;"/></g></g></g></g></svg>Ajouter un Plat</h1><br>
  <div class="mb-3 form-check">
    <label for="examplenomproduit" class="form-label"><h3>Nom:</h3></label>
    <input type="text" class="form-control" id="exampleInputnom_produit" placeholder="Nom du plat" name="nom">
  </div>
  <div class="mb-3 form-check">
    <label for="examplecatgorie" class="form-label"><h3>Description:</h3></label>
    <input type="text" class="form-control" id="exampleInputcatégorie" placeholder="les ingerdients du plat" name="description">
  </div>
  <div class="mb-3 form-check">
    <label class="form-label" for="exampleprix"><h3>prix:</h3></label>
    <input type="text" class="form-control" name="prix" id="exampleprix" placeholder="Prix du plat en millimes">
  </div>
  <div class="mb-3 form-check">
  <label for="avatar"><h3>Selectionner un image:</h3></label>
</div>
  <div class="mb-3 form-check">
  <input type="file"
       id="avatar" name="img" required 
      >
  </div>
  <div class= "mb-3 form-check">
  <button type="submit"  style="text-lign:center;width:100%;background-color:green;" ><h2 style="justify-content: center;">Ajouter</h2></button>
</div>
</div>
<div class="id">
<img src='images/kfc.svg' width="100%" style="background-color:white;" > 
</div>
</div>
</form> 
</div>
</body>
</html>