
<?
require_once("connect.php");
$id=$_POST['fileid'];
if (!mysql_query("DELETE FROM Uploads WHERE file_ID ='$id'"))
{ 
echo "Its possible that you spelled fileID uncorrectly or file dont exists";
}
else { echo "File ".$id. "ID is del"; }
mysql_close($con);
?>