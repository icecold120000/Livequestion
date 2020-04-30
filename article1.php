<!-- haut de page -->
<?php
	require_once("./Includes/header.php");
?>
<!-- Menu -->
<div class="grey">
	<div class="bloc">
		<img src="Contents/logopage.png"><a href="" class="menu">Répondre</a> <a href="" class="menu">Poser une question</a> <a href="" class="menu">Communauté</a> <a href="index.php" class="menu">Article 1</a> <a href="index2.php" class="menu">Article 2</a> <a href="index3" class="menu">Article 3</a>
	</div>
	<br>
	<!-- Recherche -->
	<div class="background-grey1">
		<img src="Contents/search.png"><input type="text" name="recherche-site" aria-label="rechercher informations" placeholder="Rechercher une question" /><input type="submit" value="Rechercher" />
		<br>
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
			<option value="Royaume-Unis">Royaume-Unis</option>
			<option value="Allemagne">Allemagne</option>
		</select>

	<label for="choix-genre">Genre</label>
		<select id="choix-genre">
			<option value="Tous">Tous</option>
			<option value="Divertissement">Divertissement</option>
			<option value="Culture">Culture</option>
			<option value="Education">Education</option>
		</select>

	<label for="choix-categorie">Catégories</label>
		<select id="choix-categorie">
			<option value=""> -- Choisissez la catégorie à ajouter -- </option>
			<option value="Divertissement">Divertissement</option>
			<option value="Culture">Culture</option>
			<option value="Education">Education</option>
		</select>
	</div>
	<!-- Commenntaire -->
	<div class="background-grey">
		<div>
			<aside class="right">
				<section class="Comments1">
					<div class="commentimg">
						<img class="CommentIcon" src="Contents/Upload_Profile/persona3.jpg">
					</div>
					<div class="commentp">
						<p><strong>Praesent vitae velit tristique old alos</strong></p>
						<p>Ned ut perspiciatias unde omnis ise natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa 
						<br>"Proin vel dolor dictum, congue tellus at, lobortis neque"</p>
					</div>
			</aside>
		</div>
		<!-- Profil + question + images -->
		<p><img src="Contents/Upload_Profile/persona1.jpg" class="profile" /> Yann @yann60, <span class="comment-time">il y a 8 minutes</span></p>
		<b><p>A votre avis, quelle cravate me va le mieux pour mon entretien d'embauche de demain</p></b>
			<div>
				<img src="Contents/cravatte1.jfif" class="img">
				<img src="Contents/cravatte2.jfif" class="img">
				<img src="Contents/cravatte3.jfif" class="img">
				<img src="Contents/cravatte4.jfif" class="img4">
			</div>
		</div>
	</div>
	<!-- Profil + question + images -->
	<div class="background-grey">
		<p><img src="Contents/Upload_Profile/persona2.jpg" class="profile" /> Yann @JulienParla91, <span class="comment-time">il y a 12 minutes</span></p>
		<b><p>Est-ce que cette décoration pour notre nouvelle chambre d'hôte vous plaît ?</p>
			<div>
				<img src="Contents/chambre.jpg" class="img">
				<img src="Contents/tetes.jpg" class="img2">
			</div>
	</div>
</div>
<!-- Bas de page -->
<?php
	require_once("Includes/footer.php");
?>