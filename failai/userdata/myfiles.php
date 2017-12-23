<?php
session_start();
require_once("connect.php");
// Basic ban scrip

mysql_select_db($c_database, $con);
$ban_result = mysql_query("SELECT * FROM black_list");
while ($row = mysql_fetch_array($ban_result)){
if ($_SERVER[REMOTE_ADDR]==$row['IP'])# banned assholes 78.57.178.231
{ header ("location: http://".$web_url."/403.shtml");}
}
// End of ban scrip by Simonaslol
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="/../style.css" />
<title> Kult.ura.lt </title>
</head>
<body>
<center>
<?
if ($_SESSION['username']==null)
{
die ("You must log in first.");
}
if ($_GET['column']==null)
{$_GET['column']='etc';}
$con = mysql_connect("localhost",$c_username,$c_password);
mysql_select_db($c_database);
$result=mysql_query("SELECT * FROM Uploads WHERE Uploader=\"".$_SESSION['username']."\"ORDER BY file_ID DESC");

echo "<div class='round'><table width=\"900\" class='lol'>
<tr class='lol'>
<th class='lol'>ID</th>
<th class='lol'>File Name</th>
<th class='lol'>Date</th>
<th class='lol'></th>
<th class='lol'>Uploader</th>
<th class='lol'>Size(Mbytes)</th>
</tr>";
// <a class="blue">
while ($row = mysql_fetch_array($result)){
	echo "<tr class='lol'>";
	echo "<td class='lol'>" . $row['file_ID'] . "</td>";
	echo "<td class='lol'>" . $row['File_name'] . "</td>";
	echo "<td class='lol'>" . $row['Date'] . "</td>"; // onclick="window.open('/../school.php','_self')"
	echo "<td class='lolL' style='cursor:pointer' onclick=\"window.open('/../upload/".$row['URL']."','_self')\">Download</td>"; /* class=blue */
	echo "<td class='lol'>" . $row['Uploader'] . "</td>";
	echo "<td class='lol'>" . $row['Size'] . "</td>";
	echo "</tr>";
}
echo "</table></div>";

mysql_close($con);
?>