<?php
	require_once('./Includes/header.php');
	require_once('./Traitement/traitement_userpage.php');
	
	if (!empty($_POST)) {
		$traitement = preTraitement($_POST);
		if($traitement['success']){
			Request($DB, "SELECT :iduser FROM utilisateur");
			Request($DB, "UPDATE utilisateur SET :nameuser = $_POST['nameuser_form'] WHERE :iduser = $_GET['iduser_form']");
			Request($DB, "UPDATE utilisateur SET :emailuser = $_POST['emailuser_form'] WHERE :emailuser = $_GET['emailuser_form']");
			Request($DB, "UPDATE utilisateur SET :mdpuser = $_POST['mdpuser_form'] WHERE mdpuser = $_GET['mdpuser_form']");			
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
					<input type="text" name="nameuser_form" placeholder="Veuiller saisir votre nouveau nom d'utilisateur" class="input">
					<?php
						if (isset($traitement['erreurs']['nameuser_form'])) {
							echo "<span class='erreur'>".$traitement['erreurs']['nameuser_form']."</span>";
						}
					?>
				</div>
				<div class="form-control">
					<span>E-mail :</span>
					<input type="text" name="emailuser_form" placeholder="Veuiller saisir votre nouveau email" class="input">
					<?php
						if (isset($traitement['erreurs']['emailuser_form'])) {
							echo "<span class='erreur'>".$traitement['erreurs']['emailuser_form']."</span>";
						}
					?>
				</div>
				<div class="form-control">
					<span>Mot de passe :</span>
					<input type="text" name="mdpuser" placeholder="Veuiller saisir votre nouveau mot de passe" class="input">
					<?php
						if (isset($traitement['erreurs']['mdpuser_form'])) {
							echo "<span class='erreur'>".$traitement['erreurs']['mdpuser_form']."</span>";
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