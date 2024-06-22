<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>


<?php
include 'ConnexionBD.php';

if(!empty($_POST)){
    print_r($_POST);
 $uname = $_POST['nom'];

 $pass = $_POST['password'];



  
    $sql = "SELECT * FROM users WHERE username= '$uname' AND password ='$pass'";

    $reponse = $pdo->query($sql);

    $reponse = $reponse->fetch(PDO::FETCH_ASSOC);
  

  //  echo'RESULT + ';
  //  print_r($reponse);
 

    if (!empty($reponse)) {

      
     //   print_r($reponse);
     //   echo "uname=".$uname ;
     //   echo 'WERE IN !!!!';

        if ($reponse['username'] === $uname && $reponse['password'] === $pass) {

            echo "Logged in!";


            header("Location: welcome.php?nom=$uname");

            exit();
         

         }
         else{

            header("Location: sign-in.php?error=Incorect User name or password");

            exit();

        }}
        else{

            header("Location: sign-in.php?error=Incorect User name or password");

            exit();


     } }




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
   height:60%;  
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
        <h1>SIGN IN</h1><br>
        <?php if (isset($_GET['error'])) { ?>

<p class="error"><?php echo $_GET['error']; ?></p>

<?php } ?>

    <form  action="<?= $_SERVER['PHP_SELF']?>"  method="post"  >
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><h3>Name:</h3></label>
    <input type="email" class="form-control" name="nom" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"><h3>Password:</h3></label>
    <input type="password" class="form-control"  name="password" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <div class="d-grid gap-2">
  <button type="submit" class="btn btn-danger" >SIGN IN</button>
  <div>Don't have an account ? <a href="sign-up-final.php"> sign Up</a></div>
</div>
</form>
</div>
</body>
</html>