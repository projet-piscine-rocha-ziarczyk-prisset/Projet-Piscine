<?php require 'header.php'; ?>

<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=espace_membre;charset=utf8', 'rot', '');

if(isset($_GET['id']) AND $_GET['id'] > 0) {
   $getid = intval($_GET['id']);
   $requser = $bdd->prepare('SELECT * FROM vendeurs WHERE id = ?');
   $requser->execute(array($getid));
   $userinfo = $requser->fetch();
?>

      <header class="page-header header container-fluid">
         <div class="overlayp"></div>
         <div class="overlayp"></div>
         <div class="descriptionp">
         <style>
         header {background-image: url('amazonece.jpg');}
         </style>
            <h1>Profil de <?php echo $userinfo['pseudo']; ?></h1>
            <br /><br />
            Pseudo = <?php echo $userinfo['pseudo']; ?>
            <br />
            Mail = <?php echo $userinfo['mail']; ?>
            <br />
            <?php
            if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']) {
            ?>
            <br />
            <a href="editionprofilvendeur.php">Editer mon profil</a>
            <a href="deconnexion.php">Se déconnecter</a>
            <a href="redaction.php">Vendre des articles</a>
            <?php
            }
            ?>
            
   </header>

   <div class="container features">
      <div class="row">
         <div class="col-lg-4 col-md-4 col-sm-12">
         <h3 class="feature-titlep" align="center">Offre du moment</h3>
         <img src="iphone-xr.png" class="img-fluid">
         <p align="center">
         Apple Iphone XR 64Go 800€
         </p>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
          <h3 class="feature-titlep" align="center">Meilleur prix</h3>
         <img src="airpods2.jpg" class="img-fluid">
         <p align="center">
         Apple Airpods 2 180€
         </p>
      </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
      <h3 class="feature-titlep">Entrer en contact!</h3>
      <div class="form-group">
         <input type="text" class="form-control" placeholder="Votre nom:" name="">
      </div>
      <div class="form-group">
          <input type="email" class="form-control" placeholder="Courriel:" name="email">
      </div>
      <div class="form-group">
         <textarea class="form-control" rows="4">Vos commentaires</textarea>
      </div>
      <input type="submit" class="btn btn-secondary btn-block" value="Envoyer" name="">
      </div>
      </div>
   </div>

   <?php   
} else {
?>



      <header class="page-header header container-fluid">
         <div class="overlayp"></div>
         <div class="overlayp"></div>
         <div class="descriptionp">
         <style>
         header {background-image: url('amazonece.jpg');}
         </style>
            <h1>ECE Amazon</h1>
            <p>
            Par Prisset Robinson, Ziarczyk-Aumont Paul et Rocha Pinto Quentin.
            </p>
            
   </header>

   <div class="container features">
      <div class="row">
         <div class="col-lg-4 col-md-4 col-sm-12">
         <h3 class="feature-titlep" align="center">Offre du moment</h3>
         <img src="iphone-xr.png" class="img-fluid">
         <p align="center">
         Apple Iphone XR 64Go 800€
         </p>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
          <h3 class="feature-titlep" align="center">Meilleur prix</h3>
         <img src="airpods2.jpg" class="img-fluid">
         <p align="center">
         Apple Airpods 2 180€
         </p>
      </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
      <h3 class="feature-titlep">Entrer en contact!</h3>
      <div class="form-group">
         <input type="text" class="form-control" placeholder="Votre nom:" name="">
      </div>
      <div class="form-group">
          <input type="email" class="form-control" placeholder="Courriel:" name="email">
      </div>
      <div class="form-group">
         <textarea class="form-control" rows="4">Vos commentaires</textarea>
      </div>
      <input type="submit" class="btn btn-secondary btn-block" value="Envoyer" name="">
      </div>
      </div>
   </div>

<?php
}
?>

<?php require 'footer.php'; ?>