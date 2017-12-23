<?
	function login(){
			session_start();
			header( 'Location: '.$url.'/failai/addr.php' );
			// Check if he wants to login:
			$clean_u=filter_var($_POST[username],FILTER_SANITIZE_SPECIAL_CHARS);
			$clean_p=filter_var($_POST[password],FILTER_SANITIZE_SPECIAL_CHARS);
			if (!empty($_POST[username])){
			require_once("connect.php");
			// Check if he has the right info.
			$query = mysql_query("SELECT * FROM members WHERE username = '$clean_u' AND password = '$clean_p'")
				or die ("Neteisingi duomenys.");
	
			$row = mysql_fetch_array($query)
				or die ($_SESSION['log_error']="<b class=\"red\">Blogi duomenys</b>");
	
			if (!empty($row[username])){
				$_SESSION[username] = $row[username];
				echo "";
				exit();
			}
		}
	}

?>