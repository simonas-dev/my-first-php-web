<?php
function register(){
	// Check if he wants to register:
	if ((!empty($_POST[username]))
	&& (!empty($_POST[password]))){
		exit("No password/username.");
	
		// Check if passwords match.
		if ($_POST[password] != $_POST[password2])
			exit("Passwords don't match.");

		// Variables
		$date = date("Y-m-d//H:i");
		$ip = $_SERVER[REMOTE_ADDR];
		$hash = password_hash( $_POST[password], PASSWORD_BCRYPT);
		// Insert
		$query = mysql_query ("INSERT INTO members( username, hash, date )
		VALUES ('$_POST[username]', '$hash', '$date', '$ip')")
			exit("Database Error.");
}

?>
<!DOCTYPE HTML>
		<form name="reg" action="register.php" method="post" onsubmit="return validateForm()">
