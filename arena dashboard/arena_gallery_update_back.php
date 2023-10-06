<?php
//include database configuration file
include("db.php");
$ids		 =	 mysqli_real_escape_string($mysqli, $_POST['id']); 
$member_name		 = 	mysqli_real_escape_string($mysqli , $_POST['p_name']);

 if(!empty($_FILES['img1']['tmp_name']))
   {
$temp1 = explode(".",$_FILES["img1"]["name"]);
$newfilename1 = rand(). "_".date('m-d-Y_hia') . '.' .end($temp1);
move_uploaded_file($_FILES['img1']['tmp_name'],"galleryarena/".$newfilename1);
$img1=$newfilename1;


$sql		    =	"UPDATE arenagallery SET
p_name	    =	  '$member_name',
gallery            =     '$img1'	WHERE id='$ids'";    	   
   }
   else
   {
	$sql		  =	"UPDATE arenagallery SET
p_name	  =	  '$p_name' WHERE id='$ids'"; 
	
	} 
   if (!mysqli_query($mysqli,$sql)) {
  die('Error: ' . mysqli_error($mysqli));
}
header("location:arena_gallery.php?pro=$menu");
   ?>