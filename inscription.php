<?php 
	require_once('./Includes/header.php');
	require_once('./Traitement/traitement_inscription.php');
	
	if (!empty($_POST)) {
		$traitement = preTraitement($_POST);
		if($traitement['success']){
			if($DB != null){
				$testReq = Traitement($DB, $_POST);
			}
			else{
				$testReq = false;
			}
			if(!$testReq){
				echo "Erreur";
			}
			else{
				echo "Réussi";
			}
		}
	}
?>
	<main>
		<div class="retour">
			<a href="index.php"><button class="btn btn-success">Retourner à la page d'acceuil</button></a>
		</div>
		<form action="" method="POST">
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
					<input type="text" name="email" id="email" placeholder="Veuillez saisir votre email:" />
					<?php
						if (isset($traitement['erreurs']['email'])) {
							echo "<span class='erreur'>".$traitement['erreurs']['email']."</span>";
						}
					?>
				</div>
				<div class="saisie">
					<label for="genre">Genre:</label>
					<select id="genre" name="genre">
						<option value="M">Homme</option>
						<option value="F">Femme</option>
					</select>
					<?php
						if (isset($traitement['erreurs']['genre'])) {
							echo "<span class='erreur'>".$traitement['erreurs']['genre']."</span>";
						}
					?>
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
					<input type="submit" value="S'inscrire" class="btn btn-primary">
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