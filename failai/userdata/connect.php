<?php
	// example http://herp.derp.lt
	$url="http://kult.ura.lt";
	$main_admin="Simonas";

	// MySQL connect information.
	$c_username = "skeltonas_db";
	$c_password = "OZv7gedw";
	$c_host = "localhost";
	$c_database = "skeltonas_db";

	// Connect.
	$con = mysql_connect($c_host, $c_username, $c_password)
	or die ("It seems this site's database isn't responding.");

	mysql_select_db($c_database)
	or die ("It seems this site's database isn't responding.");

?>