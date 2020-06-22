<?php 
	require_once('./DB/request.php');
	function PreTraitement(array $informations){
		$erreurs = [];
		if (empty($informations['nameuser'])) {
			$erreurs['nameuser'] = 'Veuillez saisir un nom d\'utilisateur';
		}
		if (isset($informations['emailuser']) && empty($informations['emailuser'])) {
			$erreurs['emailuser'] = 'Veuillez saisir votre email';
		}
		if (empty($informations['mdpuser'])) {
			$erreurs['mdpuser'] = 'Veuillez saisir votre mot de passe';
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