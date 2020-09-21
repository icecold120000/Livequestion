<?php 
	require_once('./Includes/header.php');
	require_once("./DB/request.php");
	$DB = ConnectDB("livequestion", "127.0.0.1", "3306", "root", "root");
	require_once('./Traitement/traitement_connexion.php');
	if(!empty($_POST)){
		$traitement = PreTraitement($_POST);
		if($traitement['success']){
			if($DB != null){
				$req = Traitement($DB, $_POST);
			}
			else{
				$req = null;
			}
			$traitement = PostTraitement($req, $_POST);
			if ($traitement['success']) {
				session_start();
				$_SESSION['pseudo_utilisateur'] = $_POST['user_form'];
				$_SESSION['mail_utilisateur'] = $_POST['email'];
				header('Location: ./');
				exit();
			}
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
					<input type="text" name="user_form" id="nom" placeholder="Veuillez saisir votre utilisateur" />
					<?php
						if (isset($traitement['erreurs']['user_form'])) {
							echo "<span class='erreur'>".$traitement['erreurs']['user_form']."</span>";
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
					<input type="submit" value="Se connecter" class="btn btn-primary">
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


