<!-- Haut de page -->
<?php
	require_once("Includes/head.php");
?>
<!-- Menu -->
<div class="bloc">
	<img src="Contents/logopage.png"><a href="" class="menu">Répondre</a> <a href="" class="menu">Poser une question</a> <a href="" class="menu">Communauté</a> <a href="index.php" class="menu">Article 1</a> <a href="index2.php" class="menu">Article 2</a> <a href="index3" class="menu">Article 3</a> <div class="profil"><a class="points">776 points</a> <img src="Contents/bleu.jpg" class="image-utilisateur"></div>
</div>
<br>
<!-- Compte utilisateur -->
<div class="compte">
	<p>Choix du compte</p>
	<label for="choix-pays"></label>
		<select id="choix-pays">
			<option value="compte">Mon compte personnel<option>
		</select>
</div>
<!-- Ajout question -->
<h4>Poser une question</h4>
<p>Quel est votre question ?</p>
<input type="text" name="reponses" aria-label="reponses" />
<!-- Commentaire -->
<div>
	<aside class="right">
		<section class="Comments1">
			<div class="commentimg">
				<img class="CommentIcon" src="Contents/Upload_Profile/persona3.jpg">
			</div>
			<div class="commentp">
				<p><strong>Praesent vitae velit tristique old alos</strong></p>
				<p>Ned ut perspiciatias unde omnis ise natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa</p>
				<p>"Proin vel dolor dictum, congue tellus at, lobortis neque"</p>
			</div>
		</section>
	</aside>
</div>
<!-- Choix -->
<label for ="choix-langue">Langue</label>
	<select id="choix-langue">
		<option value="Français">Français</option>
		<option value="Espagnol">Espagnol</option>
		<option value="Anglais">Anglais</option>
		<option value="Allemand">Allemand</option>
	</select>

<label for="choix-pays">Pays</label>
	<select id="choix-pays">
		<option value="France">France</option>
		<option value="Espagne">Espagne</option>
		<option value="Royaume-Uni">Royaume-Uni</option>
		<option value="Allemagne">Allemagne</option>
	</select>

<label for="choix-genre">Genre</label>
	<select id="choix-genre">
		<option value="Tous">Tous</option>
		<option value="Divertissement">Divertissement</option>
		<option value="Culture">Culture</option>
		<option value="Education">Education</option>
	</select>
<!-- Ajout image -->
	<label for="NombreReponseAttentues">Nombre de réponse attendues</label>
	<input type="text" name="reponses" aria-label="reponses" />
	<br>
	<img class="image" src="Contents/folder.png">
	<img class="image" src="Contents/folder.png">
	<img class="image" src="Contents/folder.png">
	<p>Coût de la question : 0 points</p>
	<strong><a href="" class="choix">Annuler</a> <a href="" class="choix">Valider</a></strong>
</div>
<!-- Bas de page -->
<?php
	require_once("Includes/footer.php");
?>