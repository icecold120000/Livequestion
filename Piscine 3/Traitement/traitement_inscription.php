<?php 
	require_once('./DB/request.php');
	function traitementInscription(array $informations) {
		$erreurs = [];
		if (empty($informations['user'])) {
			$erreurs['user'] = 'Veuillez saisir un nom d\'utilisateur';
		}
		if (empty($informations['email'])) {
			$erreurs['email'] = 'Veuillez saisir votre émail';
		}
		if (empty($informations['mdp'])) {
			$erreurs['mdp'] = 'Veuillez saisir votre mot de passe';
		}
		if (!empty($erreurs)) {
			return [
				'succes' => false,
				'erreurs' => $erreurs,
			];
		}
		return [
			'succes' => true,
		];
		var_dump($erreurs);
	}
?>