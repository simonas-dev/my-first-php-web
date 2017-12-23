<?php
session_start();
require_once("connect.php");

// Check his status.
if (!empty($_SESSION[username])) // he got it.
{
	echo "You are currently logged in, <b>$_SESSION[username]</b>.";
}
else // bad info.
{
	echo "You are currently <b>NOT</b> logged in.";
}

?>