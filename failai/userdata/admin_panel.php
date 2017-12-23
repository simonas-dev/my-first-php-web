<?php
session_start();
if (($_SERVER['REMOTE_ADDR']!="87.247.107.51")
|| ($_SESSION['username']!="simonas"))
{
header ("http://4.bp.blogspot.com/_Mt4qyhflsHY/S93ATDeq6XI/AAAAAAAAAkA/l5SF0G8XILU/s200/stop.jpg");
}
require_once("connect.php");  ?>
<html>
<head>
<style type="text/css">
table
{
border-collapse:collapse;
}
table, td, th
{
border:1px solid black;
}
</style>
</head>

<body>
<table>
<tr>
<th>Acion</th>
<th></th>
</tr>
<tr>
<td>Deletle File</td>
<td>ID:<form action="file_del.php" method="post"><input type='text' name="fileid"/><input type="submit"/></form></td>
</tr>
<tr>
<td>Ban User</td>
<td>IP addr:
<form action="user_ban.php" method="post"><input type="text" name="userID"/><textarea rows="2" cols="5" name="reason">Uzknisai</textarea>
<input type="submit"/></form>
</tr>
<tr>
<td>@All User</td>
<td>
<A href="users_db.php" target="_blank">Link</A>
</tr>
<tr>
<td>PHPmyAdmin</td>
<td><A href="<? echo $url;?>/phpmyadmin" target="_self"> LINK</A>
</tr>
<tr>
<td>Direct Admin</td>
<td><A href="<? echo $url;?>:2222" target="_self"> LINK</A>
</tr>
</table>
</body>
</html>