<link rel="stylesheet" type="text/css" href="style.css">
<?php 
	require_once('./Includes/header.php');
	require_once('./Includes/nav.php');
	require_once('./Traitement/traitement_incription.php');

	
		if (!empty($_POST)) {
			$traitement = traitement_inscription($_POST);

		}
?>
	<main>
		<a href="index.php"><button class="btn btn-success">Retourner à la page d'acceuil</button></a>
		<form action="#" method="_POST">
			<div class="container-fluid">
				<div>
					<label for="nom">Nom de l'utilisateur:</label>				
					<input type="text" name="nom" id="nom" placeholder="Veuillez saisir votre utilisateur:" />
					<span class="erreur">
						<?php
							if (isset($traitement) && !$traitement['succes'] && isset($traitement['erreurs']['user'])) {
								echo $traitement['erreurs']['user'];
							}
						?>
					</span>
				</div>
				<div>
					<label for="email">Email:</label>
					<input type="text" name="email" id="email" placeholder="Veuillez saisir votre émail:" />
					<span class="erreur">
						<?php
							if (isset($traitement) && !$traitement['succes'] && isset($traitement['erreurs']['email'])) {
								echo $traitement['erreurs']['email'];
							}
						?>
					</span>
				</div>
				<div>
					<label for="genre">Genre:</label>
					<select id="genre">
						<option value="valeur1" selected>Homme</option>
						<option value="valeur2">Femme</option>
					</select>
				</div>
				<div>
					<label for="mdp">Mot de passe:</label>
					<input type="text" name="mdp" id="mdp" placeholder="Veuillez saisir votre mot de passe:" />
					<span class="erreur">
						<?php
							if (isset($traitement) && !$traitement['succes'] && isset($traitement['erreurs']['mdp'])) {
								echo $traitement['erreurs']['mdp'];
							}
						?>
					</span>
				</div>
				<div>
					<input type="submit" value="Valider" class="btn btn-primary">
					<a href="inscription.php">Créer un compte utilisateur</a>
				</div>
			</div>
		</form>
	</main>
<?php
	require_once('/includes/footer.php');
 ?>