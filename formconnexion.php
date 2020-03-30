<?php 
	require_once('./Includes/header.php');
	require_once('./Includes/nav.php');
	require_once('./Traitement/traitement_inscription.php');
	require_once('./DB/request.php')

	session_start();
	$_SESSION['user'] = $donnees = Request();
?>
<main>
	<a href="index.php"><button class="btn btn-success">Retourner à la page d'acceuil</button></a>
	<form action="#" method="_POST">
		<div class="container-fluid">
			<div>
				<label for="nom">Nom de l'utilisateur:</label>				
				<input type="text" name="nom" id="nom" placeholder="Veuillez saisir votre utilisateur" />
			</div>
			<div>
				<label for="mdp">Mot de passe:</label>
				<input type="text" name="mdp" id="mdp" placeholder="Veuillez saisir votre mot de passe" />					
			</div>
			<div>
				<input type="submit" value="Valider" class="btn btn-primary">				
			</div>
		</div>
	</form>
</main>
<?php
	require_once('/Includes/footer.php');
 ?>


