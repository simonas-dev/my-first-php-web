<?php
session_start();
require_once("userdata/connect.php");
$con = mysql_connect("localhost",$c_username,$c_password);
mysql_select_db($c_username);
$ban_result = mysql_query("SELECT * FROM black_list");
while ($row = mysql_fetch_array($ban_result)){
if ($_SERVER[REMOTE_ADDR]==$row['IP'])
{ header ("location: ".$url."/403.shtml");}
}
?>
<html>
<head>
<script type="text/javascript">
function validateForm()
{
var x=document.forms["upform"]["file"].value
if (x==null || x=="")
  {
  alert("Viska uþpildyk!!!Asilo borise...");
  return false;
  $("p").css("background-color","red");
  }
}
</script>
<meta http-equiv="Content-Type"
content="text/html;charset=ISO-8859-13" />
<style>
h5.note {
font-size: 90% 
font-decoration: none;
position: relative;
top: 200px;}
</style>
</head>
<body>

<h5 class="note"><center>
<form action="admin_upload_file.php" name="upform" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
<p>File named:<input type="text" name="filenick" size="20" /><br />
<label for="file">Filename:</label>
<input type="file" name="file" id="file" /></p>		
<br />
Type:<select name="type">
<option value="etc">Darbai</option>
<option value="mp3">Muzika</option>
<option value="img">Images</option>
<option value="my">Privatûs</option>
</select>
<br/>
<input type="submit" name="submit" value="Submit"/>
</form><br/>
</center>
</body>
</html> 