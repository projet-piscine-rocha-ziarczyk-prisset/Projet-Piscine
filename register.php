<?php require 'header.php'; ?>
<div class="row">
<div id="section2">
</div>

<div id="section">
	<br />
	<br />

	<h1>S'inscrire</h1>
	
	<form action="" method="POST">
		<table>

			<tr>
				<td>Votre pseudo</td>
			</tr>

			<tr>
				<td><input type="txt" name="username"></td>
			</tr>

			<tr>
				<td>Adresse e-mail</td>
			</tr>

			<tr>
				<td><input type="txt" name="email"></td>
			</tr>

			<tr>
				<td>Mot de passe</td>
			</tr>

			<tr>
				<td><input type="password" name="password"></td>
			</tr>

			<tr>
				<td>Confirmation</td>
			</tr>

			<tr>
				<td><input type="password" name="password_confirm"></td>
			</tr>

			<tr>
				<br />
				<td><input type="button" class="btn btn-outline-secondary btn-lg" value="S'inscrire" onClick="location.href='piscine_html.php';">
			</tr>

		</table>
	</form>
</div>

<div id="section3">
</div>
</div>
<?php require 'footer.php'; ?>