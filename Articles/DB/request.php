<?php
	function Request($db, $request){
		$req = $db->query($request)->fetchAll();
		return $req;
	}
?>