<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<?php include 'ConnexionBD.php' ?>

<?php
 $username_err = $password_err = $login_err = $confirm_password_err="";

if (!empty($_POST)) {
    // Récupérer les informations de la tâche à partir du formulaire
print_r($_POST);


    $nom = $_POST['nom'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    if( $confirmpassword!== $password){
      echo '<div class="alert alert-danger" role="alert">';
      echo "Verifier svp !!!!!!!!!!!!!";
      echo '</div>'; 
      $confirm_password_err="password don't match"; }
   else if($confirmpassword== $password){

    $username_err = $password_err = $login_err =$confirm_password_err= "";

    

  
  
   

  
   // $img = file_get_contents ($_POST['img']['tmp_name']);
// Ajouter le contenu dans la table food dans la BD
                // Préparer la requête d'insertion
               //  "INSERT INTO user (nom,password) 
                   //     VALUES ('$nom', '$password)";
                    $sql =    "INSERT INTO `users` ( `username`, `password`)
                         VALUES ( '$nom', '$password')";
                // Envoyer la requête
                $reponse = $pdo->exec($sql);
                if ($reponse) {
                    echo '<div class="alert alert-success" role="alert">';
                        echo "Insertion du nouveau user efféctuée avec succès";
                    echo '</div>';
                    header('Location:sign-in.php');  
                } else {
                    echo '<div class="alert alert-danger" role="alert">';
                        echo "Problème d'insertion de  nouveau user cette tâche";
                    echo '</div>'; 
                    
                }
                        
            }

          }

                ?>
<style>
body{
    background-size: cover;
        display:grid;
        place-items:center;
       background-repeat:no-repeat;
        height: 100vh;
        background: white;
        background-image: url('images/bg.webp');
        background-repeat: no-repeat;
    background-size: cover;
    justify-items: start;

}
.cat{
  padding: 20px;
  background-color:white;
  opacity: 1  ;
   width:30%;
  
   opacity: 0.8 ;
   margin:10%;

  }

.cat h1{
    color:#f6901f;
    text-align: center;
}
</style>
<body>
    <div class="cat"> 
        <h1>SIGN UP</h1><br>
    <form action="<?= $_SERVER['PHP_SELF']?>"  method="POST" enctype="multipart/form-data" >
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" ><h3>Name </h3></label>
    <input type="email" class="form-control" id="exampleInputEmail1" required aria-describedby="emailHelp" name="nom">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label" ><h3>Password:</h3></label>
    <input type="password" class="form-control" id="exampleInputPassword1" required name="password">
  </div><div class="mb-3">
    <label for="exampleInputPassword1" class="form-label" ><h3>Confirm Password:</h3></label>
    <input type="password" class="form-control" id="exampleInputPassword1" required name="confirmpassword">
    <span class="alert"><a href=""> <?php echo $confirm_password_err; ?></a></span>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <div class="d-grid gap-2">
  <button class="btn btn-danger" type="submit" style="background-color:#f6901f;" >SIGN UP </button>
  <div>You already have an account ? <a href="sign-in.php">Sign in</a></div>
</div>
</form>
</div>
</body>
</html>