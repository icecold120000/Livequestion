<!-- Haut de page -->
<?php
	require_once("./Includes/header.php");
?>
<!-- Menu -->
<div class="bloc">
	<img src="Contents/logopage.png">
	<a href="" class="menu">Répondre</a>
	<a href="" class="menu">Poser une question</a>
	<a href="" class="menu">Communauté</a>
	<a href="article1.php" class="menu">Article 1</a>
	<a href="article2.php" class="menu">Article 2</a>
	<a href="article3.php" class="menu">Article 3</a>
	<div class="profil"
		<a class="points">776 points</a>
		<img src="Contents/bleu.jpg" class="image-utilisateur">
	</div>
</div>
<!-- Compte utilisateur -->
<div class="compte">
	<p>Choix du compte</p>
	<label for="choix-pays"></label>
	<select id="choix-pays">
		<option value="compte">Mon compte personnel</option>
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
				<p>Praesent vitae velit tristique old alos</p>
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
<img class="image" src="Contents/folder.png"/>
<img class="image" src="Contents/folder.png"/>
<img class="image" src="Contents/folder.png"/>
<p>Coût de la question : 0 points</p>
<a href="" class="choix">Annuler</a>
<a href="" class="choix">Valider</a>
<!-- Bas de page -->
<?php
	require_once("Includes/footer.php");
?>