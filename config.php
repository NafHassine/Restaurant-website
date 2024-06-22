<?php
    
    try{
     $pdo=new PDO('mysql:host=localhost;dbname=restaurant;charset=utf8;', 'root', '' );  //on a crée une nouvelle connexion et il faut indiquer des paramètres
    }
    catch (Exception $e)
    {
      die('Erreur de connexion.' . $e->getMessage());
    }
  ?>