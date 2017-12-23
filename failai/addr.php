<?php
session_start();
require_once("userdata/connect.php");

// Basic ban script
mysql_select_db($c_database, $con);
$ban_result = mysql_query("SELECT * FROM black_list");
while ($row = mysql_fetch_array($ban_result)){
if ($_SERVER[REMOTE_ADDR]==$row['IP'])
{ header ("location: http://".$web_url."/403.shtml");}
}
// End of ban script by Simonas�

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="/../style.css" />


<title> Kult.ura.lt </title>
<style type="text/css">
</style>
<!-- ripintas cha sriptas -->
<script>
function myHide(field) {
	if (field == 1) {
		if (document.login.username.value == "Vartotojo vardas") 
			document.login.username.value = "";
		if (document.login.password.value == "")
			document.login.password.value = "********";	
	}
	else if (field == 2) {
		if (document.login.password.value == "********") 
			document.login.password.value = "";
		if (document.login.username.value == "") 
			document.login.username.value = "Vartotojo vardas";
	}
}
function myShow() {
	if (document.login.password.value == "") 
		document.login.password.value = "********";	
}
</script>
<!--Clock scriptas -->
<script type="text/javascript">
function startTime()
{
var today=new Date();
var h=today.getHours();
var m=today.getMinutes();
var s=today.getSeconds();
// add a zero in front of numbers<10
m=checkTime(m);
s=checkTime(s);
document.getElementById('txt').innerHTML=h+":"+m+":"+s;
t=setTimeout('startTime()',500);
}

function checkTime(i)
{
if (i<10)
  {
  i="0" + i;
  }
return i;
}
</script>


<script type="text/javascript"> //pole scrip 
function getVote(int)
{
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("poll").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","poll_vote.php?vote="+int,true);
xmlhttp.send();
}
</script>
</head>
<!-- end of Head -->
<body>
<div style="position:relative; top: 318px;z-index:-5">
<div style="background-image:url('/../images/backgr.gif');
height:35px;
margin-left:-7px;
margin-right:-7px;
" ></div> <div style="position:absolute; top:10px;z-index:-6">Paspausk F5</div></div><!-- img backgroundas-->
<div style="background-image:url('/../images/topback.gif');
position:relative; top: -46px;
height:48px;
margin-left:-7px;
margin-right:-7px;
background-reapeat:x-reapeat;
"></div>
<center>
<table>
<td>
<center><div class="bannar" style="width:138px; height:115px;"><b><img src="/../images/banner.png"></img></b></div></center>
</td>
</table>
</br>
<div class="round">
<table class="menu_bar">

<div class="menu">
<td>
<tr>
<center><body onload="startTime()"><div id="txt" class="clock" ></div>
</body>
<body></center>
<td height="28px" cellspacing="0%" cellpadding="0%" style="cursor:pointer" class="menu" onclick="window.open('/../index.php','_self')" align="middle">Pradzia</td>

<td height="28px" cellspacing="0%" cellpadding="0%" style="cursor:pointer" class="menu" onclick="window.open('addr.php','_self')" align="middle">Failai</td>


<td height="28px" cellspacing="0%" cellpadding="0%" style="cursor:pointer" class="menu" onclick="window.open('/../school.php','_self')" align="middle">Mokykla</td>
</tr></td></div></table> </div></br><br>
<div class="box" >
<tr>
<div class="margin">
 
<tr>
<th width="165px" height="110px">
<div class="user">
<center>
<? if ($_SESSION[username]==null) // <table><th><td class=\"lbut\" align=\"middle\" style=\"cursor:pointer\" onclick=\"window.open('userdata/logout.php','_self')\">Atsijungti</td></tr></table>
{ echo $_SESSION[log_error]."
<form name=\"login\" action=\"userdata/login.php\" method=\"post\">
<input type=\"text\" name=\"username\" onfocus=\"myHide(1)\" onblur=\"myHide(1)\" value=\"Vartotojo vardas\"/><br>	
<input type=\"password\" name=\"password\" onfocus=\"myHide(2)\" onblur=\"myShow\" value='********'/><br>
<input type=\"hidden\" name=\"cookie\" value=\"set_c\"/>	
<input type=\"submit\" class=\"button\" value=\"Prisijungti!\"/><br>
</form><center><table><th><td WIDTH=\"120px\" height=\"15px\" cellspacing=\"0%\" cellpadding=\"0%\" style=\"cursor:pointer\" class=\"button\" onclick=\"window.open('userdata/register.php','_self')\" align=\"middle\">Registruotis</td></th></table></b></div></center>";
} else {
echo "Sveikas, ".$_SESSION[username]."                 <br><table width=\"100%\"><th>
<td WIDTH=\"120px\" height=\"15px\" cellspacing=\"0%\" cellpadding=\"0%\" style=\"cursor:pointer\" class=\"button\" onclick=\"window.open('userdata/myfiles.php','_self')\" align=\"middle\">Mano failai</td>
<td WIDTH=\"120px\" height=\"15px\" cellspacing=\"0%\" cellpadding=\"0%\" style=\"cursor:pointer\" class=\"button\" onclick=\"window.open('admin_up_form.php','_self')\" align=\"middle\">Įkelti failą</td>
<td WIDTH=\"120px\" height=\"15px\" cellspacing=\"0%\" cellpadding=\"0%\" style=\"cursor:pointer\" class=\"button_red\" onclick=\"window.open('userdata/logout.php','_self')\" align=\"middle\">Atsijungti</td></tr></table><br/>";
}
if ($_SESSION['username']=="Simonas")
{ echo "<A href=\"userdata/admin_panel.php\" target=\"_self\">Admin Panel</A>"; }
if ($_SESSION['log_error']!=null)
{
$_SESSION['log_error']=null;
}
?>
</th>

<th width="240px" height="110px">

</th>
</div>
</tr>
</table>
</p>
</div>
<div class="textmargin">
<div class="roundshit"><div class="button"></div></div></div></div><center><ul>
<table WIDTH="100px" class="none"><tr><p class="filelist"></b>
<td WIDTH="120px" height="16px" cellspacing="0%" cellpadding="0%" style="cursor:pointer" class="button" onclick="window.open('addr.php?column=etc','_self')" align="middle">Darbai</td><td> </td>
<td WIDTH="120px" height="16px" cellspacing="0%" cellpadding="0%" style="cursor:pointer" class="button" onclick="window.open('addr.php?column=mp3','_self')" align="middle">Muzika</td><td> </td>
<td WIDTH="120px" height="16px" cellspacing="0%" cellpadding="0%" style="cursor:pointer" class="button" onclick="window.open('addr.php?column=img','_self')" align="middle">Nuotraukos</td></div></tr></table></div>
</p>
<center>
<?
if ($_GET['column']=='my')
{
die ("<b class=\"blue\">Scrip</b>: Nope. Chuck Testa");
}
if ($_GET['column']==null)
{$_GET['column']='etc';}
$con = mysql_connect("localhost",$c_username,$c_password);
mysql_select_db($c_database);
$result=mysql_query("SELECT * FROM Uploads WHERE type=\"".$_GET['column']."\" ORDER BY file_ID DESC");

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
	echo "<td class='lolL' style='cursor:pointer' onclick=\"window.open('upload/".$row['URL']."','_self')\">Download</td>"; /* class=blue */
	echo "<td class='lol'>" . $row['Uploader'] . "</td>";
	echo "<td class='lol'>" . $row['Size'] . "</td>";
	echo "</tr>";
}
echo "</table></div>";

mysql_close($con);
?>
</center>
</center>
</p>
  </div>
</td>
</tr>
</div>
</center></center></div></div></div>
<div style="position:relative;top:-1377px;left:0px;z-index:-5;">
<div style="background-image:url('backgr.gif');
height:35px;
margin-left:-7px;
margin-right:-7px;
" ></div> <div style="position:absolute; top:10px;z-index:-6">Paspausk F5</div></div><!-- img backgroundas-->
<img style="position:fixed;bottom:10px;right:50px;"src="/../images/copyr.png" width="90" height="45"/> 
</body>
</html>