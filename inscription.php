<?php 
	require_once('./Includes/header.php');
	require_once('./Traitement/traitement_inscription.php');
	
	if (!empty($_POST)) {
		$traitement = PreTraitement($_POST);
		var_dump($traitement);
		if($traitement['success']){
			Request($DB, "INSERT user FROM utilisateur", $pseudo_utilisateur);
			Request($DB, "INSERT email FROM utilisateur", $email_utilisateur);
			Request($DB, "INSERT mdp FROM utilisateur", $mdp_utilisateur);			
		}
	}
?>
	<main>
		<div class="retour">
			<a href="index.php"><button class="btn btn-success">Retourner à la page d'acceuil</button></a>
		</div>
		<form action="#" method="POST">
			<div class="bordure">
				<div class="saisie">
					<label for="nom">Nom de l'utilisateur:</label>				
					<input type="text" name="user" id="nom" placeholder="Veuillez saisir votre utilisateur:" />
					<?php
						if (isset($traitement['erreurs']['user'])) {
							echo "<span class='erreur'>".$traitement['erreurs']['user']."</span>";
						}
					?>
				</div>
				<div class="saisie">
					<label for="email">Email:</label>
					<input type="text" name="email" id="email" placeholder="Veuillez saisir votre émail:" />
					<?php
						if (isset($traitement['erreurs']['email'])) {
							echo "<span class='erreur'>".$traitement['erreurs']['email']."</span>";
						}
					?>
				</div>
				<div class="saisie">
					<label for="genre">Genre:</label>
					<select id="genre">
						<option value="valeur1" selected>Homme</option>
						<option value="valeur2">Femme</option>
					</select>
				</div>
				<div class="saisie">
					<label for="mdp">Mot de passe:</label>
					<input type="password" name="mdp" id="mdp" placeholder="Veuillez saisir votre mot de passe:" />
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
			<p>Déjà inscrit? <a href="formconnexion.php">Appuyer ici pour vous connecter.</a></p>
		</div>
	</main>
<?php
	require_once('./includes/footer.php');
 ?>