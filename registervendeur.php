<?php
$bdd = new PDO('mysql:host=localhost;dbname=espace_membre;charset=utf8', 'rot', '');

if(isset($_POST['forminscription'])) {
   $pseudo = htmlspecialchars($_POST['pseudo']);
   $mail = htmlspecialchars($_POST['mail']);
   $mail2 = htmlspecialchars($_POST['mail2']);
   $mdp = sha1($_POST['mdp']);
   $mdp2 = sha1($_POST['mdp2']);
   if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])) {
      $pseudolength = strlen($pseudo);
      if($pseudolength <= 255) {
         if($mail == $mail2) {
            if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
               $reqmail = $bdd->prepare("SELECT * FROM vendeurs WHERE mail = ?");
               $reqmail->execute(array($mail));
               $mailexist = $reqmail->rowCount();
               if($mailexist == 0) {
                  if($mdp == $mdp2) {
                     $insertmbr = $bdd->prepare("INSERT INTO vendeurs(pseudo, mail, motdepasse) VALUES(?, ?, ?)");
                     $insertmbr->execute(array($pseudo, $mail, $mdp));
                     $erreur = "Votre compte a bien été créé ! <a href=\"loginvendeur.php\">Me connecter</a>";
                     //$_SESSION['comptecree'] = "Votre compte a bien été créé !";
                     //header('Location: index.php');
                  } else {
                     $erreur = "Vos mots de passes ne correspondent pas !";
                  }
               } else {
                  $erreur = "Adresse mail déjà utilisée !";
               }
            } else {
               $erreur = "Votre adresse mail n'est pas valide !";
            }
         } else {
            $erreur = "Vos adresses mail ne correspondent pas !";
         }
      } else {
         $erreur = "Votre pseudo ne doit pas dépasser 255 caractères !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>

<?php require 'header.php'; ?>

      <div class="row">
      <title>Register</title>
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
         <h2>Inscription</h2>
         <br />
         <form method="POST" action="">
            <table>
                     <p>
                     <label for="pseudo">Pseudo :</label><br /><input type="text" placeholder="Votre pseudo" id="pseudo" name="pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>" /><br />
                  
                     <label for="mail">Mail :</label><br /><input type="email" placeholder="Votre mail" id="mail" name="mail" value="<?php if(isset($mail)) { echo $mail; } ?>" /><br />
                  
                     <label for="mail2">Confirmation du mail :</label><br /><input type="email" placeholder="Confirmez votre mail" id="mail2" name="mail2" value="<?php if(isset($mail2)) { echo $mail2; } ?>" /><br />
                  
                     <label for="mdp">Mot de passe :</label><br /><input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" /><br />
                  
                     <label for="mdp2">Confirmation du mot de passe :</label><br /><input type="password" placeholder="Confirmez votre mdp" id="mdp2" name="mdp2" /><br />
                     <br />
                  
                     <input type="submit" name="forminscription" value="Je m'inscris" class="btn btn-outline-secondary btn-lg" />
                     </p>
         </form>
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
      </div>
   </table>
</div>

    <div id="section3">
    </div>

    </div>

<?php require 'footer.php'; ?>