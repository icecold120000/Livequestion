<?php
	require_once('./Includes/header.php');
?>
	<section id="ajoutQuestion">
		<div class="container-fluid">
			<h1>Ajouter une question</h1>
		</div>
		<div>
			<form action="" method="POST">
				<div class="form-group">
					<label class="info" for="question">Soumettre une Question:</label>
					<select class="custom-select">
						<option>Cinéma</option>
						<option>Maths</option> 
						<option>Français</option> 
						<option>Technologie</option> 
					</select>
					<textarea class="form-control" cols="50" rows="20" placeholder="Veuiller écrire votre question."></textarea>
					<button type="submit" class="btn btn-success">Valider</button>
				</div>
			</form>
		</div>
	</section>
<?php
	require_once('./Includes/footer.php');
?>