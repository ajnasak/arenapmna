<?php
//include database configuration file
include("db.php");
$ids		 			 =	 mysqli_real_escape_string($mysqli, $_POST['ids']); 

$offers_details	 = 	mysqli_real_escape_string($mysqli,$_POST['editor1']);

$sql		   		 =	"UPDATE about SET
editor1     =    '$offers_details'	WHERE ids='$ids'"; 

	
   if (!mysqli_query($mysqli,$sql)) {
  die('Error: ' . mysqli_error($mysqli));
}
header("location:about_ckeditor.php?pro=$ids");
   
   