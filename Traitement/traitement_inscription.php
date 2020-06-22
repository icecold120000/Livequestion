<?php 
	require_once('./DB/request.php');
	function PreTraitement(array $informations){
		$erreurs = [];
		if (empty($informations['user'])) {
			$erreurs['user'] = 'Veuillez saisir un nom d\'utilisateur';
		}
		if (empty($informations['email'])) {
			$erreurs['email'] = 'Veuillez saisir votre email';
		}
		if ($informations['genre'] != 'M' && $informations['genre'] != 'F') {
			$erreurs['genre'] = 'Page corrompue veuillez recharger la page';
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
	function Traitement(PDO $db, array $informations){
		$req = Request($db, "INSERT INTO `utilisateur`(`pseudo_utilisateur`, `mdp_utilisateur`, `mail_utilisateur`, `genre_utilisateur`, `id_date`, `role_utilisateur`) VALUES (:user, :mdp, :email, :genre, 1, 0)", $informations);
		return $req;
	}
?>