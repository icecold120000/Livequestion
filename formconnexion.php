<?php 
	require_once('./Includes/header.php');
	require_once('./Traitement/traitement_inscription.php');
	require_once('./DB/request.php')
?>
	<main>
		<div class="retour">
			<a href="index.php"><button class="btn btn-success">Retourner à la page d'acceuil</button></a>
		</div>
		<form action="#" method="_POST">
			<div class="bordure">
				<div class="saisie">
					<label for="nom">Nom de l'utilisateur:</label>				
					<input type="text" name="nom" id="nom" placeholder="Veuillez saisir votre utilisateur" />
					<span class="erreur">
						<?php
							if (isset($traitement) && isset($traitement['erreurs']['utilisateur'])) {
								echo $traitement['erreurs']['utilisateur'];
							}
						?>
					</span>
				</div>
				<div class="saisie">
					<label for="mdp">Mot de passe:</label>
					<input type="text" name="mdp" id="mdp" placeholder="Veuillez saisir votre mot de passe" />
					<span class="erreur">
						<?php
							if (isset($traitement) && isset($traitement['erreurs']['mdp'])) {
								echo $traitement['erreurs']['mdp'];
							}
						?>
				</div>
				<div class="submit">
					<input type="submit" value="Valider" class="btn btn-primary">
				</div>
			</div>
		</form>
		<div class="more">
			<p>Pas de compte.<a href="inscription.php">Appuyer ici pour créer un compte utilisateur.</a></p>
		</div>
	</main>
<?php
	require_once('./Includes/footer.php');
 ?>


