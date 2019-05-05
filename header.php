<!DOCTYPE html>
<html>
<head>
	<title>ECE Amazon</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
 	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="piscine_styles.css">


	<script type="text/javascript"></script>
	<script type="text/javascript">
 		$(document).ready(function(){
 		$('.header').height($(window).height());
 		});
</script>
</head>
<body>
	<nav class="navbar navbar-expand-md">
 
 
 		<div class="zoom"><a href="piscine_html.php" ><img src="a4.png" class="img-fluid" class="size"></a></div>
 		<button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
 			<span class="navbar-toggler-icon"></span>
 		</button>

 		<div class="recherche_p">

			<form action="/search" id="searchthis" method="get">
			<input id="search" name="q" type="text" placeholder="Rechercher un article" />
			<input id="search-btn" type="submit" value="Rechercher" />
		</form>

		</div>
 		<div class="collapse navbar-collapse" id="main-navigation">
 			<ul class="navbar-nav">
 			
      			<ul id="nav" class="dropdown dropdown-horizontal">

	<li class="dir">Catégories
		<ul>
			<li class="first"><a href="vendrearticle.php" class="dir">Ajout récent</a></li>
			<li class="first"><a href="#" class="dir">Livres</a>
				<ul>
					<li class="first"><a href="bd.php">BD</a></li>
					<li class="last"><a href="roman.php">Romans</a></li>
				</ul>
			</li>

			<li><a href="#" class="dir">Musiques</a>
				<ul>
					<li class="first"><a href="classique.php">Classique</a></li>
					<li class="last"><a href="rap.php">Rap</a></li>
					<li class="last"><a href="pop.php">Pop</a></li>
					
				</ul>
			</li>
			<li><a href="#" class="dir">Vêtements </a>
				<ul>
					<li class="first"><a href="femme.php">Femme</a></li>
					<li class="last"><a href="homme.php">Homme</a></li>
					
				</ul>
			</li>
			<li><a href="#" class="dir">Sports et Loisirs</a>
				<ul>
					<li class="first"><a href="sport.php">Accessoires Sports</a></li>
					<li class="last"><a href="Loisirs.php">Loisirs</a></li>
				</ul>
			</li>
		</ul>
	</li>
	
</ul>
				<li class="nav-item"><a class="nav-link" href="venteflash.php">Vente Flash</a></li>

				<ul id="nav" class="dropdown dropdown-horizontal">
					<li class="dir">Vendre
						<ul>
							<li class="first"><a href="registervendeur.php" class="dir">Register</a></li>
							<li class="first"><a href="loginvendeur.php" class="dir">Login</a></li>
							</ul>
						</li>
					</ul>

 				<ul id="nav" class="dropdown dropdown-horizontal">

	<li class="dir">Votre compte
		<ul>
			<li class="first"><a href="register.php" class="dir">Register</a></li>
			<li class="first"><a href="login.php" class="dir">Login</a>
			</li>
		</ul>
	</li>
</ul>
 				<li class="nav-item"><a class="nav-link" href="panier.php">Panier</a></li>
 				<li class="nav-item"><a class="nav-link" href="admin.php">Admin</a></li>
 			</ul>
 		</div>
 	</nav>