
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Acceuil</title>
</head>

<style>
      body{
        background-image: url('images/fod.jpg');
        }
        h1 {
            background-color:white;
           
        }
      
      h4 , h1{
        color: orange;
      }
      .bd-placeholder-img {
        font-size: 1.125rem;
        background-image: url('Images/food.jpg')
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      .py-lg-5 {
    padding-top: 0rem!important;
    padding-bottom: 0rem!important;
}

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      .prix{
    position: absolute;
    /* float: right; */
    top: 20px;
    text-align:center;
    
    right: -10px;
    /* height: 24px; */
    width: 100px;
    background-color: #5bb75b;}
    </style>
<body>
<?php include 'ConnexionBD.php' ?>
    <?php
    
      $nom=$_GET['nom'];
      //echo $nom;
    
        // Requête SQL
        $sql = 'SELECT * FROM food';
        // Envoyer la requête au serveur et récupérer le résultat
        $reponse = $pdo->query($sql);

        $reponse = $reponse->fetchall(PDO::FETCH_ASSOC);
    
    ?>
  <header style="
    background-color: #0d0e10;
    height: 89px;
">
<section class=" text-center" style="padding:5px 10px;">

    <div class="">
      <div class="">
        <h1 class=""><h1 style="background-color:black; font-family: 'Dancing Script', cursive;color:white;">Chikh Burger</h1>       
      </div>
    </div>
  </section>
<a style="
    height: 45px;
    position: absolute;
    left: 0px;
    top: 10px;
    color:white;
    font-family: 'Dancing Script', cursive;
" href="panier.php?nom=<?php if(!empty($_GET)){echo $_GET["nom"]; }?>"><img src="images/orders.png" alt=""  style="
    height: 45px;
    /* position: absolute; */
    /* left: 10px; */
    margin: 0 10px;
    /* top: 10px; */
   
"><br>My orders</a>
</header>
<h4 class="" style="
  font-family: 'Dancing Script', cursive;
  color: black;
  text-align: center;
">" Hi, <b><?php if(!empty($_GET)){echo $_GET["nom"]; }?></b>. Are you hungry ?  SO add something to your chart <p class="p">We will be happy to cook for you 👌 "</p></h4>
<h2 style="    font-family: 'Dancing Script', cursive;text-align: center;">Our Menu :</h2>
<div class="album py-5">
  
    <div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    <?php foreach($reponse as $tab) : ?>
        <div class="col">
          <div class="card shadow-sm">
            <div class="cc">
                <div class="prix" style="   font-family: cursive;
    font-size: x-large;"><?=$tab['prix'] ?> $ </div>
            <img src='<?php echo "data:image/jpeg;base64,".base64_encode( $tab['img'] ) ?>' width="100%" height="100vh" style="
    min-height: 245px;
"
    >
            </div>
            <div class="card-body">
              <h4><?= $tab['nom'] ?></h4>
              <p class="card-text"><h5><?= $tab['description'] ?></h5></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group" style="min-width: -webkit-fill-available;">
                  <button type="submit"  class="btn btn-sm btn-outline-secondary" style="background-color:#ffbe33"><a href="addtopanier.php?id=<?=$tab['id'] ?>&nom=<?=$nom ?>" style="color:white;text-decoration:none;font-weight: bolder;font-size: larger;">Commander</a> </button>
                </div>
              </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>










        

      
    </div>
  </div>

</main>


</body>
</html>