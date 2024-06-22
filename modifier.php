<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modifier Food</title>
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
                 //if($_GET){
            // Récupérer l'id de la tâche à modifier
            if($_GET['id']){
            $id = $_GET['id'];
                
            // Récupérer les infos du client à modifier
            $sql = "SELECT * FROM food WHERE id = $id";
            $reponse = $pdo->query($sql);

            $tache = $reponse->fetch(PDO::FETCH_ASSOC);
          }
           // print_r($tache);
         // }
        ?>
     


<form action="modifierfood.php"  method="POST" enctype="multipart/form-data">

  <div class="var">
  <div class="cat">
    <h1>Modifier un Plat</h1><br>
  <div class="mb-3 form-check">
    <label for="examplenomproduit" class="form-label"><h3>Nom:</h3></label>
    <input type="text" class="form-control" id="exampleInputnom_produit" placeholder="Nom du plat" value="<?=$tache['nom'] ?>" name="nom">
    <input type="text" class="form-control"   style="  display: none;" id="exampleInputnom_produit" placeholder="Nom du plat" value="<?=$tache['id'] ?>" name="id">
  </div>
  <div class="mb-3 form-check">
    <label for="examplecatgorie" class="form-label"><h3>Description:</h3></label>
    <input type="text" class="form-control" id="exampleInputcatégorie" placeholder="les ingerdients du plat" value="<?=$tache['description'] ?>" name="description">
  </div>
  <div class="mb-3 form-check">
    <label class="form-label" for="exampleprix"><h3>prix:</h3></label>
    <input type="text" class="form-control" name="prix" id="exampleprix" value="<?=$tache['prix'] ?>" placeholder="Prix du plat en millimes">
  </div>
  <div class="mb-3 form-check">
  <label for="avatar"><h3>Selectionner un image:</h3></label>
</div>
  <div class="mb-3 form-check">
  <input type="file" required
       id="avatar" name="img" value="<?php echo "data:image/jpeg;base64,".base64_encode( $tache['img'] )?>" 
      >
  </div>
  <div class= "mb-3 form-check">
  <button type="submit"    style="text-lign:center;width:100%;background-color:green;" ><h2 style="justify-content: center;">MODIFIER</h2></button>
</div>
</div>
<div class="id">
<img src="images/kfc.svg" width="100%"  > 
</div>
</div>
</form> 
</div>
</body>
</html>
