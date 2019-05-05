<?php require 'header.php'; ?>

<?php
$bdd = new PDO('mysql:host=localhost;dbname=espace_membre;charset=utf8', 'rot', '');
$articles = $bdd->query('SELECT * FROM articles ORDER BY date_time_publication DESC');
?>

<head>
   <header class="page-header header container-fluid">
         <div class="overlay"></div>
         <div class="description">
   <h1>Ajout récent</h1>
   </div>

   <div class="container features">
   </div>
      <div class="row">
         
</head>
<body>
   <ul>
      <?php while($a = $articles->fetch()) { ?>
      
         <a href="article.php?id=<?= $a['id'] ?>">
            <img src="miniatures/<?= $a['id'] ?>.jpg" width="100" /><br />
            <?= $a['titre'] ?>
         </a>
          | <a href="redaction.php?edit=<?= $a['id'] ?>">Modifier</a> | <a href="supprimer.php?id=<?= $a['id'] ?>">Supprimer</a> | <a href="acheter.php?id=<?= $a['id'] ?>">Acheter</a>
          <br /><br />
      
   
  </div>
   </div>
   </div>
</ul>


      <?php } ?>
   <ul>
</body>
</header>

<?php require 'footer.php'; ?>