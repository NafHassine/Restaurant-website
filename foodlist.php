<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Document</title>
</head>
<?php include 'ConnexionBD.php' ?>
<?php
        // Requête SQL
        $sql = 'SELECT * FROM food';
        // Envoyer la requête au serveur et récupérer le résultat
        $reponse = $pdo->query($sql);

        $reponse = $reponse->fetchall(PDO::FETCH_ASSOC);
    
    ?>
<style>
  
.cat{
width:60%;
margin-left: auto;
margin-right: auto;
background-color:white;
border-radius:15px;
  }

.table{
  border-collapse: collapse;
 
}


th, td{
  border: 1px solid black;
  padding: 7px;
  text-align:center;
  margin:auto;
  vertical-align: middle;
}


</style>
<body style="background-image:url('images/bg.jpg');background-size:cover;">
<div class="cat">
  <div>
  <div>
    <h2 style="display:grid;text-align:center;margin:10px;font-family: 'Dancing Script', cursive;">Liste des plats : <button type="button" class="btn btn-success" style="margin:10px;"><a href="ajouterfood.php?nom=<?php if(!empty($_GET)){echo $_GET["nom"]; }?>" style="text-decoration:none;color:white;font-size:bolder;"> Ajouter </a></button></h2>   
  </div>  
  </div>
 <div >
    <table class="table table-hashed">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nom du plat</th>
      <th scope="col">Description</th>
      <th scope="col">prix</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
  <?php foreach($reponse as $tab) : ?>
    <tr>
      <th scope="row"><?= $tab['id'] ?></th>
      <td><?= $tab['nom'] ?></td>
      <td><?= $tab['description'] ?></td>
      <td><?= $tab['prix'] ?></td>
      <td> <img src='<?php echo "data:image/jpeg;base64,".base64_encode( $tab['img'] ) ?>' width="100vh" height="100vh" ></td>
      <td style="display: flex;
    justify-content: space-evenly;"><a href="modifier.php?id=<?= $tab['id'] ?>"><button class="btn btn-primary btn-sm">modifier</button></a><a href="supprimer.php?id=<?= $tab['id'] ?>"><button type="button" class="btn btn-danger btn-sm" >Supprimer</button></a></td>
      </tr>
      <?php endforeach; ?>
    
</div>
  </tbody>
</table>
</body>

</html>
