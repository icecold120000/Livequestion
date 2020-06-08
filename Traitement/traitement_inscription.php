<?php 
	require_once('./DB/request.php');
	function preTraitement(array $informations){
		$erreurs = [];
		if (empty($informations['user'])) {
			$erreurs['user'] = 'Veuillez saisir un nom d\'utilisateur';
		}
		if (empty($informations['email'])) {
			$erreurs['email'] = 'Veuillez saisir votre email';
		}
		if (empty($informations['mdp'])) {
			$erreurs['mdp'] = 'Veuillez saisir votre mot de passe';
		}
		if (!empty($erreurs)) {
			return [
				'succes' => false,
				'erreurs' => $erreurs,
			];
		}else{
			return [
				'succes' => true,
			];
		}
	}
	function traitement(array $informations){
		
	}
?>