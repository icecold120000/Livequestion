<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('Location: ./formconnection.php');
		exit();
	}
	require_once("./DB/connect.php");
	require_once("./DB/request.php");
	$DB = ConnectDB("livequestion", "127.0.0.1", "3306", "root", "root");
	require_once('./Includes/header.php');
?>
	<main>
		<!--Partie accueil-->
		<section id="part1">
			<div class="container">
				<img src="Contents/step-1.png" class="screenshot">
				<h1>Lorem Ipsum <span>dolor sit <span>amet</h1>
				<div>
					<h5>
						Sed elit libero, accumsan et volutpat id, aliquam</span>
						<span>tristique odio. Mauris sed lectus a justo malesuada </span>
						<span>dapibus. Morbi eleifend tellus nisi, sed ullamcorper </span>
						<span> mi tincidunt faucibus. Mauris justo tortor, tempor </span>
						<span>ut odio in, dictum malesuada eros. </span>
					</h5>
					<div>
						<button class="bouton">Bouton CTA</button>
					</div>
				</div>
			</div>
		</section>
		<!--Partie logos et texte-->
		<section id="part2">
			<div class="container" id="maindiv">
				<div class="explications">
					<div class="colonne1">
						<img src="Contents/i1.png">
						<h6>Suits Your Style</h6>
						<p>
							<span>Drogon sed ut perspiciatis unde omnis iste error</span>
							<span>sit volupatmen accusantium doloremque</span>
							<span>laudantium, totam aperiam, eaque Arya.</span>
						</p>
					</div>			
					<div class="colonne2">
						<img src="Contents/i2.png">
						<h6>Ut posuere molestie</h6>
						<p>
							<span>Duis convallis convallis tellus imp interdum.</span>
							<span>diam phasellus vestibulum lorem sed risus ultricies Tyrion.</span> 
							<span>Enim blandit volutpat</span>
						</p>
					</div>
					<div class="colonne3">
						<img src="Contents/i3.png">
						<h6>Vestibulum ut erat consectetur</h6>
						<p>
							<span>Eunuch sed blandit libero volutpat sed cras.</span>
							<span>Cersei quis imperdiet tincidunt unuch pulvinar</span>
							<span>sapien.Habitasse platea Davos vestibulum</span>
						</p>
					</div>
				</div>
			</div>
		</section>
		<!-- Partie 3 de la page d'accueil-->
		<section id="part3">
		<h1>Aenean magna odio</h1>
		<p>Sed ut unde omnis iste natus error sit voluptatem</p>
		<p>accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.</p>
		<center><button class="liens">Lien 1</button>
		<button class="liens-2">Lien 2</button>
		<button class="liens-2">Lien 3</button></center>
		<img src="./Contents/part3.png">
		</section>
		<!-- Partie 4 du page d'accueil -->
		<section id="part4">
			<img src="./Contents/iplay.png">
			<p>"Nulla venenatis magna fringilla"</p>
		</section>
		<!--Partie 5 de page d'accueil -->
		<section id="part5">
			<div class="container-fluid">
				<p>Etiam laot, alique sceleris</p>
				<h6>Sed ut  perspiciatis unde omnis iste natus error sit volupattem </h6>
				<h6>accusantium doloremque lauudantium, totam rem aperiam, eaque ipsa.</h6>
			</div>
			<div class="container-fluid">
				<div class="ent">
					<a href=""><button class="btn btn-light"><img src="./Contents/marque1.jpg"><span>Kyan boards</span></button></a>
					<a href=""><button class="btn btn-light"><img src="./Contents/marque2.jpg"><span>Atica</span></button></a>
					<a href=""><button class="btn btn-light"><img src="./Contents/marque3.jpg"><span>Treva</span></button></a>
					<a href=""><button class="btn btn-light"><img src="./Contents/marque4.jpg"><span>Kanba</span></button></a>
				</div>
				<div class="ent">
					<a href=""><button class="btn btn-light"><img src="./Contents/marque5.jpg"><span>Triv Forms</span></button></a>
					<a href=""><button class="btn btn-light"><img src="./Contents/marque7.jpg"><span>Aven</span></button></a>
					<a href=""><button class="btn btn-light"><img src="./Contents/marque6.jpg"><span>Utosia</span></button></a>
				</div>
			</div>
		</section>
		<!--Partie 6(FAQ) du site -->
		<section id="faq">
			<p>FAQ</p>
			<h6>Sed ut perspiciatis unde omnis iste natus error sit volupattem </h6>
			<h6>accusantium doloremque lauudantium, totam rem aperiam, eaque ipsa.</h6>
			<?php
				foreach($afficheQuestions as $afficheQuestion){
			?>
			<div id="Q<?php echo $afficheQuestion['question']['son_id_q']; ?>">
				<p><?php echo $afficheQuestion['question']['son_titre']; ?>
					<button class="btn-light" type="button" data-toggle="collapse" data-target="#collapse<?php echo $afficheQuestion['question']['son_id_q']; ?>" aria-expanded="false" aria-controls="collapse<?php echo $afficheQuestion['question']['son_id_q']; ?>" onclick="button<?php echo $afficheQuestion['question']['son_id_q']; ?>();">
						<i class="fas fa-caret-down"></i>
					</button>
				</p>
				<div class="collapse" id="collapse<?php echo $afficheQuestion['question']['son_id_q']; ?>">
					<div class="card card-body">
						<span><?php echo $afficheReponse['reponse']['son_contenu']; ?></span>
					</div>
				</div>
			</div>
			<?php
				} 
			?>
			<div class="more">
				<h6>Still have unanswered questions ?<a href="vuequestion.php"> Get in touch.</a></h6>
			</div>
		</section>
	</main>
<?php
	require_once('./Includes/footer.php');
?>