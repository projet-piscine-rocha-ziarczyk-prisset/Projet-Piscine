<?php
$bdd = new PDO('mysql:host=localhost;dbname=espace_membre;charset=utf8', 'rot', '');
$mode_edition = 0;
if(isset($_GET['edit']) AND !empty($_GET['edit'])) {
   $mode_edition = 1;
   $edit_id = htmlspecialchars($_GET['edit']);
   $edit_article = $bdd->prepare('SELECT * FROM articles WHERE id = ?');
   $edit_article->execute(array($edit_id));
   if($edit_article->rowCount() == 1) {
      $edit_article = $edit_article->fetch();
   } else {
      die('Erreur : l\'article n\'existe pas...');
   }
}
if(isset($_POST['article_titre'], $_POST['article_contenu'])) {
   if(!empty($_POST['article_titre']) AND !empty($_POST['article_contenu'])) {
      
      $article_titre = htmlspecialchars($_POST['article_titre']);
      $article_contenu = htmlspecialchars($_POST['article_contenu']);
      if($mode_edition == 0) {
         // var_dump($_FILES);
         // var_dump(exif_imagetype($_FILES['miniature']['tmp_name']));
         $ins = $bdd->prepare('INSERT INTO articles (titre, contenu, date_time_publication) VALUES (?, ?, NOW())');
         $ins->execute(array($article_titre, $article_contenu));
         $lastid = $bdd->lastInsertId();
         
         if(isset($_FILES['miniature']) AND !empty($_FILES['miniature']['name'])) {
            if(exif_imagetype($_FILES['miniature']['tmp_name']) == 2) {
               $chemin = '/piscineee/miniatures/'.$lastid.'.jpg';
               move_uploaded_file($_FILES['miniature']['tmp_name'], $chemin);
            } else {
               $message = 'Votre image doit être au format jpg';
            }
         }
         $message = 'Votre article a bien été posté';
      } else {
         $update = $bdd->prepare('UPDATE articles SET titre = ?, contenu = ?, date_time_edition = NOW() WHERE id = ?');
         $update->execute(array($article_titre, $article_contenu, $edit_id));
         header('Location: /piscineee/article.php?id='.$edit_id);
         $message = 'Votre article a bien été mis à jour !';
      }
   } else {
      $message = 'Veuillez remplir tous les champs';
   }
}
?>

<?php require 'header.php'; ?>

      <div class="row">
      <title>Ajout / Modif</title>
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
      <div align="center">
         <h2>Ajout de produit</h2>
         <br /><br />
   <form method="POST" enctype="multipart/form-data" action="">
      <table>
         <p>
      <label>Titre :</label><br /><input type="text" name="article_titre" placeholder="Titre"<?php if($mode_edition == 1) { ?> value="<?= 
      $edit_article['titre'] ?>"<?php } ?> /><br />
      <label>Description :</label><br /><textarea name="article_contenu" placeholder="Contenu de l'article"><?php if($mode_edition == 1) { ?><?= 
      $edit_article['contenu'] ?><?php } ?></textarea><br />
      <?php if($mode_edition == 0) { ?>
      <label>Image :</label><br /><input type="file" name="miniature" /><br />
   
      <?php } ?>
      <br /><br />
      <input type="submit" value="Envoyer l'article" class="btn btn-outline-secondary btn-lg" />
   </p>
   </form>
   <br />
   <?php if(isset($message)) { echo $message; } ?>
</div>
   </table>
</div>
</div>

    <div id="section3">
    </div>

    </div>
<?php require 'footer.php'; ?>