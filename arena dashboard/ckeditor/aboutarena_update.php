<?php
//include database configuration file
include("db.php");
$id= mysqli_real_escape_string($mysqli,$_POST['id']);

$about	 = 	mysqli_real_escape_string($mysqli,$_POST['about']);
//echo $id;exit;
$sql		   		 =	"UPDATE about SET
about     =    '$about'	WHERE id='$id'"; 
 
	
 if (!mysqli_query($mysqli,$sql)){
  die ('error:'.mysqli_error($mysqli));}
  header("location:../tables.php");
?>  
