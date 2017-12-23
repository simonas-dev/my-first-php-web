<?
session_start();
?>
<?
require_once("connect.php");
$query = mysql_query("SELECT * FROM AdminUpload WHERE Uploader = '$_POST[username]'");
echo "<table width=\"800\">
<tr>
<th>ID</th>
<th>File Name</th>
<th>Date</th>
<th></th>
<th>Uploader</th>
<th>Size</th>
</tr>";

while ($row = mysql_fetch_array($result)){
	echo "<tr>";
	echo "<td>" . $row['personID'] . "</td>";
	echo "<td>" . $row['File_name'] . "</td>";
	echo "<td>" . $row['Date'] . "</td>";
	echo "<td>" . $row['URL'] . "</td>";
	echo "<td>" . $row['Uploader'] . "</td>";
	echo "<td>" . $row['Size'] . "</td>";
	echo "</tr>";
	}
echo "</table>";
mysql_close($con);
?>