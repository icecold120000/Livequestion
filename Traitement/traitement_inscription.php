<?php 
	require_once('./DB/request.php');
	function PreTraitement(array $informations){
		$erreurs = [];
		if (empty($informations['user'])) {
			$erreurs['user'] = 'Veuillez saisir un nom d\'utilisateur';
		}
		if (isset($informations['email']) && empty($informations['email'])) {
			$erreurs['email'] = 'Veuillez saisir votre email';
		}
		if (empty($informations['mdp'])) {
			$erreurs['mdp'] = 'Veuillez saisir votre mot de passe';
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
	function Traitement(array $informations){
		
	}
?>