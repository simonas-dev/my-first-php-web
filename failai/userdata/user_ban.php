<?
$lol = $_POST[type];
require_once("connect.php");
$sql="INSERT INTO black_list (IP, reason)
VALUES
('$_POST[userID]','$_POST[reason]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "IP address $POST[userid] have been $_POST[type].<br>
'cuz    $_POST[reason]";
echo $_POST[type];
mysql_close($con)
?>