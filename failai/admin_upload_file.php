<?php
session_start();
require_once("userdata/connect.php");?>
<html>
<head>

</head>
<body>
<?php
		$date=date("Y.m.d");
		$fsize=($_FILES["file"]["size"] / 1048576 );
		$original_name = basename( $_FILES['file']['name']);
		$type = $_POST["type"];
		$user=$_SESSION[username];
		$new_name=filter_var($_FILES['file']['name'], FILTER_SANITIZE_ENCODED);
		$org=$_FILES['file']['name'];
echo "Short name of file tag: ". $type."<br>";
$con = mysql_connect("localhost",$c_username,$c_password);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  
$clean_f=filter_var($_POST[filenick],FILTER_SANITIZE_SPECIAL_CHARS);
mysql_select_db($c_username, $con);
$sql="INSERT INTO Uploads (File_name, Date, URL, Uploader, Size, type)
VALUES
('$clean_f','$date','$new_name','$user','$fsize','$type')";

	
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1048576) . " Mbytes<br />";
	

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    elseif ((($_FILES["file"]["type"] == "application/msword")
	|| ($_FILES["file"]["type"] == "application/octet-stream") //* zip i guess
	|| ($_FILES["file"]["type"] == "application/zip")
	|| ($_FILES["file"]["type"] == "image/jpeg")
	|| ($_FILES["file"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document") //* .docx
	||	($_FILES["file"]["type"] == "application/vnd.oasis.opendocument.text")
	||	($_FILES["file"]["type"] == "application/download")//* .rar
	|| 	($_FILES["file"]["type"] == "audio/mp3")//* mp3
	||	($_FILES["file"]["type"] == "application/vnd.ms-excel")) //* exel
	&& ($_FILES["file"]["size"] < 210485760))
      {
	
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/". $org);
      echo "Stored in: " . "upload/" . $org;
	if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  else
{
echo "<br/><br/>1 record added";
}
		
					
      }
	  else { 
	  Echo "<center>Your File hasn't been uploaded. Contatct Admin for more info Skype: volume.5<center>";
	  }
	 
mysql_close($con);
?>
<center><b><A href="<? echo $url;?>/failai/addr.php" targer="_self">Files</A><b></center>
</body>

</html>
