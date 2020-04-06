<?php
	require_once('./DB/connect.php');

	function Request($db, $sql, $params){
		$req = $db->prepare($sql);
		foreach($params as $cle => $param){
			$req->bindParam($cle, $param);
		}
		$req = $req->execute();
		return $req;
	}

	function ajout(array $affiche){
		
		$date =[
			'id_date' => 'son_id_d',
			'creation_date' =>'sa_date_creation',
		];

		$utilisateur =[
			'id_utilisateur' => 'son_id_u',
			'pseudo_utilisa$teur' =>'son_pseudo',
			'email_utilisateur' =>'son_email',
		];

		$question =[
			'id_question' => 'son_id_q',
			'titre_question' => 'son_titre',
			'nombre_likes' => 'ses_likes',
			"#id_utilisateur" => 'son_user',
			"#id_date" => 'sa_date',
		];

		$reponse =[
			'id_reponse' => 'son_id_r',
			'contenu_reponse' => 'son_contenu',
			"#id_question" => 'son_id_q',
			"#id_utilisateur" => 'son_user',
			"#id_date" => 'sa_date',
		];
	}
?>