<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=espace_membre;charset=utf8', 'rot', '');

if(isset($_SESSION['id'])) {
   $requser = $bdd->prepare("SELECT * FROM membres WHERE id = ?");
   $requser->execute(array($_SESSION['id']));
   $user = $requser->fetch();
   if(isset($_POST['newpseudo']) AND !empty($_POST['newpseudo']) AND $_POST['newpseudo'] != $user['pseudo']) {
      $newpseudo = htmlspecialchars($_POST['newpseudo']);
      $insertpseudo = $bdd->prepare("UPDATE membres SET pseudo = ? WHERE id = ?");
      $insertpseudo->execute(array($newpseudo, $_SESSION['id']));
      header('Location: piscine_html.php?id='.$_SESSION['id']);
   }
   if(isset($_POST['newmail']) AND !empty($_POST['newmail']) AND $_POST['newmail'] != $user['mail']) {
      $newmail = htmlspecialchars($_POST['newmail']);
      $insertmail = $bdd->prepare("UPDATE membres SET mail = ? WHERE id = ?");
      $insertmail->execute(array($newmail, $_SESSION['id']));
      header('Location: piscine_html.php?id='.$_SESSION['id']);
   }
   if(isset($_POST['newmdp1']) AND !empty($_POST['newmdp1']) AND isset($_POST['newmdp2']) AND !empty($_POST['newmdp2'])) {
      $mdp1 = sha1($_POST['newmdp1']);
      $mdp2 = sha1($_POST['newmdp2']);
      if($mdp1 == $mdp2) {
         $insertmdp = $bdd->prepare("UPDATE membres SET motdepasse = ? WHERE id = ?");
         $insertmdp->execute(array($mdp1, $_SESSION['id']));
         header('Location: piscine_html.php?id='.$_SESSION['id']);
      } else {
         $msg = "Vos deux mdp ne correspondent pas !";
      }
   }
?>

<?php require 'header.php'; ?>

      <div class="row">
      <title>Edition Profil</title>
      </head>
    <style>
    form
    {
        text-align:center;
    }
    </style>
   <body>

      <div id="section2">
      </div>

      <div id="section">
        <br />
         <h2>Edition de mon profil</h2>
         <br />
            <form method="POST" action="">
            <table>
               <p>
               <label>Pseudo :</label><br /><input type="text" name="newpseudo" placeholder="Pseudo" value="<?php echo $user['pseudo']; ?>" /><br />
               
               <label>Mail :</label><br /><input type="text" name="newmail" placeholder="Mail" value="<?php echo $user['mail']; ?>" /><br />
               
               <label>Mot de passe :</label><br /><input type="password" name="newmdp1" placeholder="Mot de passe"/><br />
               
               <label>Confirmation - mot de passe :</label><br /><input type="password" name="newmdp2" placeholder="Confirmation du mot de passe" /><br />
               <br />
               <input type="submit" value="Mettre à jour mon profil !" class="btn btn-outline-secondary btn-lg" />
            </p>
            </form>
         <?php if(isset($msg)) { echo $msg; } ?>

      </div>
   </table>
</div>

    <div id="section3">
    </div>

    </div>

<?php   
}
else {
   header("Location: login.php");
}
?>

<?php require 'footer.php'; ?>