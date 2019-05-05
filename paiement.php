<?php require 'header.php'; ?>

 		<header class="page-header header container-fluid">
 			<div class="overlay"></div>
			<div class="description">
 				<h2>Vos achats</h2>
			</div>
<div class="container features">
	
 		<div class="row">
 			<div class=" col-sm-6">

				<h1 align="center">Coordonnées de livraison</h1>
				<form align="center">
					<tr><br>
						<td>Nom :</td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<td><input type="txt" id="name" placeholder="Votre nom" required autofocus></td><br>
						<br>
						<td>Prénom :</td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<td><input type="txt" id="firstname" placeholder="Votre Prénom" required autofocus></td><br>
						<br>
						<td>Adresse 1 :</td></tr>&nbsp;&nbsp;&nbsp;&nbsp;
						<td><input type="txt" id="adresse" placeholder="Votre Adresse" rows=5 required></td><br>
						<br>
						<td>Adresse 2 :</td></tr>&nbsp;&nbsp;&nbsp;&nbsp;
						<td><input type="txt" id="adresse" rows=5 required></td><br>
						<br>
						<td>Ville :</td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<td><input type="txt" id="name" placeholder="Votre Ville"></td><br>
						<br>
						<td>Code Postal :</td>&nbsp;
						<td><input type="txt" id="codepostal" placeholder="Votre code postal" type=text required></td><br>
						<br>
						<td>Pays :</td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<td><input type="txt" id="pays" placeholder="Votre Pays" required></td><br>
						<br>
					    <td>N° Tel :</td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					    <td><input type="tel" id="telephone" placeholder="ex&nbsp;: +336 12 34 56 78" required></td>
						<br><br>
						
				</td>
				</form>
 			</div>

			<div class=" col-sm-6"> 
		
				<h1 align="center">Option de paiement</h1>
				<form align="center">
					<br>
					<td>
						Type de carte :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						

<div>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="Visa" name="drone" value="Visa"checked>
  <label for="huey">Visa</label>
</div>

<div>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="dewey" name="drone" value="MasterCard">
  <label for="dewey">MasterCard</label>
</div>

<div>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="American Express" name="drone" value="American Express">
  <label for="louie">American Express</label>
</div>

<div>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="louie" name="drone" value="PayPal">
  <label for="PayPal">PayPal</label>
</div>
</td>







						<br>
						<td>Nom affiché sur la carte :</td>
						<td><input  id="numero_de_carte" type=number placeholder="Même nom sur carte" required></td><br>
						<br>
						<td>Date d'expiration :</td></tr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<td><input type="month" id="date" required></td><br>
						<br>
						<td>Code de sécurité:</td></tr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<td><input type=number required id="securite" placeholder="3 ou 4 chiffres"></td><br>
						<br><br>

						<a href="#" class="bouton" align="center">Valider</a>
					</td>
				</form>	
			</div>


	
		</div>
</div>


 	</header>
</div>
<?php require 'footer.php'; ?>


