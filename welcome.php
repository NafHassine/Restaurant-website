<?php
// Initialize the session

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <h1 class="my-5">Hi, <b><?php if(!empty($_GET)){echo $_GET["nom"]; }?></b>. Welcome to our site.</h1>
    <p>
        <a href="acceuil.php?nom=<?php if(!empty($_GET)){echo $_GET["nom"]; }?>" class="btn btn-warning">Order something tasty </a>
        <a href="foodlist.php" class="btn btn-danger ml-3">liste des plats </a>
    </p>
</body>
</html>