<?php
$bdd = new PDO('mysql:host=localhost;dbname=espace_membre;charset=utf8', 'rot', '');
if(isset($_GET['id']) AND !empty($_GET['id'])) {
   $suppr_id = htmlspecialchars($_GET['id']);
   $suppr = $bdd->prepare('DELETE FROM articles WHERE id = ?');
   $suppr->execute(array($suppr_id));
   header('Location: /piscineee/vendrearticle.php');
}
?>
