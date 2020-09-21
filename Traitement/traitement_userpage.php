<?php 
	require_once('./DB/request.php');
	function PreTraitement(array $informations){
		$erreurs = [];
		if (empty($informations['nameuser_form'])) {
			$erreurs['nameuser_form'] = 'Veuillez saisir un nom d\'utilisateur';
		}
		if (isset($informations['emailuser_form']) && empty($informations['emailuser'])) {
			$erreurs['emailuser_form'] = 'Veuillez saisir votre email';
		}
		if (empty($informations['mdpuser_form'])) {
			$erreurs['mdpuser_form'] = 'Veuillez saisir votre mot de passe';
		}
		if (!empty($erreurs)) {
			return [
				'success' => false,
				'erreurs' => $erreurs,
			];
		}else{
			return [
				'success' => true,
			];
		}
	}
	function Traitement(PDO $db, array $informations){
		$req = Request($db,"SELECT * FROM `utilisateur` WHERE `pseudo_utilisateur` = :user",['user'=>$informations['user']])->fetch();
		return $req;
	}
	function PostTraitement($req, array $informations){
		$erreurs = [];
		if($req === null){
			$erreurs['database'] = 'Database non initialisée contactez un administrateur';
		}
		else{
			if($req === false){
				$erreurs['user'] = 'Nom d\'utilisateur inexistant';
			}
			else{
				if($req['mdp_utilisateur'] != $informations['mdp']){
					$erreurs['mdp'] = 'Mot de passe incorrect';
				}
			}
		}
		if (!empty($erreurs)) {
			return [
				'success' => false,
				'erreurs' => $erreurs,
			];
		}
		else{
			return [
				'success' => true,
			];
		}
?>