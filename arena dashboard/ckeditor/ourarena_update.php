<?php
//include database configuration file
include("db.php");
$id= mysqli_real_escape_string($mysqli,$_POST['id']);

$ourarena	 = 	mysqli_real_escape_string($mysqli,$_POST['ourarena']);
//echo $id;exit;
$sql		   		 =	"UPDATE about SET
ourarena     =    '$ourarena'	WHERE id='$id'"; 
 
	
 if (!mysqli_query($mysqli,$sql)){
  die ('error:'.mysqli_error($mysqli));}
  header("location:../tables.php");
?>  
