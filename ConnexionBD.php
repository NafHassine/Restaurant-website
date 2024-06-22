<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion BD</title>
</head>
<body>
    <?php
    
     try{
      $pdo=new PDO('mysql:host=localhost;dbname=restaurant;charset=utf8;', 'root', '' );  //on a crée une nouvelle connexion et il faut indiquer des paramètres
     }
     catch (Exception $e)
     {
       die('Erreur de connexion.' . $e->getMessage());
     }
     
   ?>
 
 
</body>
</html>