<?php 
	require_once('./Includes/header.php');
	require_once('./Traitement/traitement_inscription.php');
	require_once('./DB/request.php')

	if (!empty($_POST)) {
		$traitement = traitementInscription($_POST);

	}

?>
	<main>
		<a href="index.php"><button class="btn btn-success">Retourner à la page d'acceuil</button></a>
		<form action="#" method="_POST">
			<div class="container-fluid">
				<div>
					<label for="nom">Nom de l'utilisateur:</label>				
					<input type="text" name="nom" id="nom" placeholder="Veuillez saisir votre utilisateur" />
					<span class="erreur">
						<?php
							if (isset($traitement) && !$traitement['succes'] && isset($traitement['erreurs']['user'])) {
								echo $traitement['erreurs']['user'];
							}
						?>
					</span>
				</div>
				<div>
					<label for="mdp">Mot de passe:</label>
					<input type="text" name="mdp" id="mdp" placeholder="Veuillez saisir votre mot de passe" />
					<span class="erreur">
						<?php
							if (isset($traitement) && !$traitement['succes'] && isset($traitement['erreurs']['mdp'])) {
								echo $traitement['erreurs']['mdp'];
							}
						?>
				</div>
				<div>
					<input type="submit" value="Valider" class="btn btn-primary">
					<?php
						if ($traitement['user'] === $donnee['user'] && $traitement['mdp'] === $donnee['mdp']){
							session_start();
						}
					?>
				</div>
			</div>
		</form>
	</main>
<?php
	require_once('/Includes/footer.php');
 ?>


