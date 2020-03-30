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

	function ajout(array $donnees) {

	}
?>