<?php
	require_once('./Includes/header.php');
	require_once('./Traitement/traitement_userpage.php');
	
	if (!empty($_POST)) {
		$traitement = preTraitement($_POST);
		if($traitement['success']){
			Request($DB, "SELECT :iduser FROM utilisateur");
			Request($DB, "UPDATE utilisateur SET :nameuser = $_POST['nameuser'] WHERE :iduser = $_GET['iduser']");
			Request($DB, "UPDATE utilisateur SET :emailuser = $_POST['emailuser'] WHERE :iduser = $_GET['iduser']");
			Request($DB, "UPDATE utilisateur SET :mdpuser = $_POST['mdpuser'] WHERE iduser = $_GET['iduser']");			
		}
	}
?>
	<section id="user" class="container-fluid">
		<div class="container-fluid">
			<h1>Modifiez votre profil</h1>
		</div>
		<div class="container-fluid">
			<div>
				<img src="Contents/Default.jpg" id="imageprofil">
				<form class="bouttonchange">
					<button class="btn btn-primary" onclick="document.getElementById('getFile').click()"><img src="Contents/Upload_Profile/Default.jpg" alt="Votre photo"></button>
					<input type='file' id="getFile" class="collapse">
				</form>
			</div>
			<form class="form" method="POST" action="./userpage.php">
				<div class="form-control">
					<span>Nom d'utilisateur :</span>
					<input type="text" name="nameuser" placeholder="Veuiller saisir votre nouveau nom d'utilisateur" class="input">
					<?php
						if (isset($traitement['erreurs']['nameuser'])) {
							echo "<span class='erreur'>".$traitement['erreurs']['nameuser']."</span>";
						}
					?>
				</div>
				<div class="form-control">
					<span>E-mail :</span>
					<input type="text" name="emailuser" placeholder="Veuiller saisir votre nouveau email" class="input">
					<?php
						if (isset($traitement['erreurs']['emailuser'])) {
							echo "<span class='erreur'>".$traitement['erreurs']['emailuser']."</span>";
						}
					?>
				</div>
				<div class="form-control">
					<span>Mot de passe :</span>
					<input type="text" name="mdpuser" placeholder="Veuiller saisir votre nouveau mot de passe" class="input">
					<?php
						if (isset($traitement['erreurs']['mdpuser'])) {
							echo "<span class='erreur'>".$traitement['erreurs']['mdpuser']."</span>";
						}
					?>
				</div>
				<div>
					<input type="submit" name="submit" placeholder="Valider" class="bouttonsubmit">
				</div>
			</div>
		</form>
	</section>
<?php
	require_once('./Includes/footer.php');
?>