<?php require 'header.php'; ?>
<div class="row">
	<header class="page-header header container-fluid">
 		<div class="overlay"></div>
		<div class="description"></div>
 			<h1>Bienvenue sur votre menu vendeur</h1>	
 			<!--<h3>Veuillez entrer vos identifiants SVP</h3>-->
 			<div class="conteneurd">
 				<div class="conteneurg">
 					<div class="colg">
 						<h3>Veuillez enter vos identifiants</h3>
 							<form method="post" action="comptevendeur.php">
								<input type="text" name="Pseudo" value="pseudo"></br>
								<input type="text" name="Email" value="email"></br>
								<input type="Submit" name="Valider" value="Valider">
							</form>
 					</div>
 					<div class="cold">
 						<h3>Créer un compte</h3>
 							<form method="post" action="comptevendeur.php">
								<input type="text" name="Pseudo" value="pseudo"></br>
								<input type="text" name="Email" value="email"></br>
								<input type="Submit" name="Valider" value="Valider">
							</form>
 					</div>	
 				</div>
 			</div>
 		</div>
	<!--<form action="Vendeur.php" method="post">
		<input type="text" name="Pseudo" value="pseudo"></br>
		<input type="text" name="Email" value="email"></br>
		<input type="Submit" name="Valider" value="Valider">
	</form>-->

		<a href="comptevendeur.php"></a>
	</header>
</div>
<?php require 'footer.php'; ?>