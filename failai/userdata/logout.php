<?php
	function logout() {
		session_start();
		$_SESSION[hash] = "";
		'Location: /../index.php'
	}
?>