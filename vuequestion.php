<?php
	require_once('./Includes/header.php');
?>
	<main>
		<section id="left" class="container-fluid">
			<div id="lesquestions" >
				<div>
					<h1>How are you doing</h1>
				</div>
				<div>
					<span>icecold120000</span>				
					<span>20 <i class="fas fa-thumbs-up"></i></span>
					<span>30 reponses <i class="fas fa-caret-down"></i></span>
				</div>			
			</div>
			<div id="lesreponses" class="container-fluid">
				<div>
					<h4>I'm fine</h4>
				</div>
				<div>
					<span>20 <i class="fas fa-thumbs-up"></i></span>
					<span>Fuzzy2319</span>
				</div>			
			</div>
		</section>
		<section id="right" class="container-fluid">
			<div class="list-group">
				<button type="button" class="list-group-item list-group-item-action active">How are you doing ?
			  	</button>
			  	<button type="button" class="list-group-item list-group-item-action">What are you doing ?</button>
			  	<button type="button" class="list-group-item list-group-item-action">Where are you ?</button>
			  	<button type="button" class="list-group-item list-group-item-action">Who are you ?</button>
			  	<button type="button" class="list-group-item list-group-item-action">When are you coming back ?</button>
			</div>
		</section>
		<section class="form">
			<form method="POST" action=""> 
				<div class="container-fluid">
					<div class="form-group">
						<label class="info" for="question">Soumettre une reponse:</label>
						<textarea class="form-control" cols="50" rows="20" placeholder="Veuiller écrire votre question."></textarea>
						<button type="submit" class="btn btn-success">Valider</button>
					</div>
				</div>
			</form>
		</div>
	</main>
<?php
	require_once('./Includes/footer.php');
?>