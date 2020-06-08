<?php 
	require_once('./Includes/header.php');
	require_once('./Traitement/traitement_inscription.php');
	require_once('./DB/request.php');
	if(!empty($_POST)){
		$traitement = PreTraitement($_POST);
	}
?>
	<main>
		<div class="retour">
			<a href="./"><button class="btn btn-success">Retourner à la page d'acceuil</button></a>
		</div>
		<form action="" method="POST">
			<div class="bordure">
				<div class="saisie">
					<label for="nom">Nom de l'utilisateur:</label>				
					<input type="text" name="user" id="nom" placeholder="Veuillez saisir votre utilisateur" />
					<?php
						var_dump($traitement);
						if (isset($traitement['erreurs']['user'])) {
							echo "<span class='erreur'>".$traitement['erreurs']['user']."</span>";
						}
					?>
				</div>
				<div class="saisie">
					<label for="mdp">Mot de passe:</label>
					<input type="password" name="mdp" id="mdp" placeholder="Veuillez saisir votre mot de passe" />
					<?php
						if (isset($traitement['erreurs']['mdp'])) {
							echo "<span class='erreur'>".$traitement['erreurs']['mdp']."</span>";
						}
					?>
				</div>
				<div class="submit">
					<input type="submit" value="Valider" class="btn btn-primary">
				</div>
			</div>
		</form>
		<div class="more">
			<p>Pas de compte? <a href="inscription.php">Appuyer ici pour créer un compte.</a></p>
		</div>
	</main>
<?php
	require_once('./Includes/footer.php');
 ?>


