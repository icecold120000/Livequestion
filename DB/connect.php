<?php
	function ConnectDB($dbname, $host, $port, $identifiant, $mdp){
		try{
			$db = new \PDO("mysql:host=".$host.";dbname=".$dbname.";port=".$port, $identifiant, $mdp);
		}catch(PDOExecption $e){
			echo "Nope:".$e->getMessage();
			$db = null;
		}
		return $db;
	}
?>
