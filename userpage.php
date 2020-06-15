<?php
	require_once('./Includes/header.php');
	require_once('./Traitement/traitement_inscription.php');
	
	if (!empty($_POST)) {
		$traitement = preTraitement($_POST);
		if($traitement['success']){
			Request($DB, "UPDATE :nameuser INTO utilisateur",$_POST['nameuser']);
			Request($DB, "UPDATE :emailuser INTO utilisateur",$_POST['emailuser']);
			Request($DB, "UPDATE :passworduser INTO utilisateur",$_POST['passworduser']);			
		}
	}
?>
	<section id="user" class="container-fluid">
		<div class="container-fluid">
			<h1>Modifiez votre profil</h1>
		</div>
		<div class="container">
			<div>
				<img src="Contents/Default.jpg" id="imageprofil">
				<form class="bouttonchange">
					<button class="btn btn-primary" onclick="document.getElementById('getFile').click()"><img src="Contents/Upload_Profile/Default.jpg" alt="Votre photo"></button>
					<input type='file' id="getFile" class="collapse">
				</form>
			</div>
			<div class="formulaire" method="POST">
				<div>
					<span>Nom d'utilisateur *</span>
					<input type="text" name="nameuser" placeholder="Votre nom d'utlilisateur" class="input">
				</div>
				<div>
					<span>E-mail *</span>
					<input type="text" name="emailuser" placeholder="Votre E-mail" class="input">
				</div>
				<div>
					<span>Mot de passe *</span>
					<input type="text" name="passworduser" placeholder="Votre mot de passe" class="input">
				</div>
				<div>
					<input type="submit" name="submit" placeholder="Valider" class="bouttonsubmit">
				</div>
			</div>
		</div>
	</section>
<?php
	require_once('./Includes/footer.php');
?>