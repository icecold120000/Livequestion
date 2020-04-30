<?php
	require_once('./Includes/header.php');
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
				<div id="mdp">
					<div>
						<p>Souhaitez-vous changer de mot de passe ?</p>
					</div>
					<div>
						<p>* = Obligatoire </p>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php
	require_once('./Includes/footer.php');
?>