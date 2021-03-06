<?php 
	require_once('./Includes/header.php');
	require_once('./Traitement/traitement_inscription.php');
	
	if (!empty($_POST)) {
		$traitement = preTraitement($_POST);
		if($traitement['success']){
			$now = new \DateTime('NOW');
			$now = $now->format('Y-m-d H:i:s');
			Request($DB, "INSERT INTO `date` VALUES `date_creation`=:date_time_now WHERE `first_name`=:username", ['date_time_now'=>$now, 'username'=> $_POST['user_form']]);
			if($DB != null){
				$testReq = Traitement($DB, $_POST)->errorInfo();
			}
			else{
				$testReq = [1 => true];
			}
			if(!empty($testReq[1])){
				$traitement = PostTraitement($DB, $_POST);
			}
		}
		header('Location: ./');
		exit();
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
					<input type="text" name="user" id="nom" placeholder="Veuillez saisir votre utilisateur:" />
					<?php
						if (isset($traitement['erreurs']['user'])) {
							echo "<span class='erreur'>".$traitement['erreurs']['user']."</span>";
						}
					?>
				</div>
				<div class="saisie">
					<label for="email">Email:</label>
					<input type="Email" name="email" id="email" placeholder="Veuillez saisir votre email:" />
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
					<?php
						if (isset($traitement['erreurs']['database'])) {
							echo "<span class='erreur'>".$traitement['erreurs']['database']."</span>";
						}
						else{
							if(isset($traitement) && $traitement['success']){
								echo "<span class='success'>Inscription réussi</span>";
							}
						}
					?>
				</div>
			</div>
		</form>
		<div class="more">
			<p>Déjà inscrit? <a href="formconnexion.php">Appuyez ici pour vous connecter.</a></p>
		</div>
	</main>
<?php
	require_once('./includes/footer.php');
 ?>