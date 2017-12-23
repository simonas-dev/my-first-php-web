<html><head>
<style>
table
{
border-collapse:collapse;
}
table, td, th
{
border:1px solid #A3BBDD;
}
th { color: white;
text-align:left;
background: black; }
</style>
</head>
<body>
<?php
// connects to mySQL
	require_once("connect.php");
	$result = mysql_query("SELECT * FROM members ORDER BY username");
echo "<table width=\"900\">
<tr>
<th>username</th>
<th>ID</th>
<th>IP adress</th>
</tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['username']. "</td>";
  echo "<td>" . $row['id']. "</td>";
  echo "<td>" . $row["ip"]. "</td>";
  	echo "</tr>";
  }

echo "<table width=\"900\">
<tr>
<th>ID</th>
<th>File name</th>
<th>Date</th>
<th></th>
<th>Uploader</th>
<th>Size</th>
<th>type</th>
</tr>";
  $result2=mysql_query("SELECT * FROM AdminUpload ORDER BY personID DESC");
while ($row2 = mysql_fetch_array($result2)){
		echo "<tr>";
	echo "<td>" . $row2['personID'] . "</td>";
	echo "<td>" . $row2['File_name'] . "</td>";
	echo "<td>" . $row2['Date'] . "</td>";
	echo "<td>" . $row2['URL'] . "</td>"; /* class=blue */
	echo "<td>" . $row2['Uploader'] . "</td>";
	echo "<td>" . $row2['Size'] . "</td>";
	echo "<td>" . $row2['type'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
	echo "<table width=\"900\">
<tr>
<th>ID</th>
<th>Patarimas</th>
<th>IP</th>
</tr>";
	$result3=mysql_query("SELECT * FROM Meaning ORDER BY personID DESC");
while ($row3 = mysql_fetch_array($result3)){
		echo "<tr>";
	echo "<td>" . $row3['personID'] . "</td>";
	echo "<td>" . $row3['Meaning'] . "</td>";
	echo "<td>" . $row3['IP'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
		echo "</table>";
	echo "<table width=\"900\">
<tr>
<th>ID</th>
<th>Ip</th>
<th>Reason</th>
</tr>";
	$result4=mysql_query("SELECT * FROM black_list ORDER BY ID DESC");
while ($row4 = mysql_fetch_array($result4)){
		echo "<tr>";
	echo "<td>" . $row4['ID'] . "</td>";
	echo "<td>" . $row4['IP'] . "</td>";
	echo "<td>" . $row4['reason'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
mysql_close($con);
?>
</body>
</html>