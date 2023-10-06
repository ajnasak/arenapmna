
 <?php
//include database configuration file
include("db.php");
$id = mysqli_real_escape_string($mysqli, $_POST['id']);
$stu_name = mysqli_real_escape_string($mysqli, $_POST['stu_name']);
$work = mysqli_real_escape_string($mysqli, $_POST['work']);
$youtube_link = mysqli_real_escape_string($mysqli, $_POST['youtube_link']);


$sql		 =   "INSERT INTO  youtube(stu_name,work
                                       ,youtube_link)
					   			 VALUES	('$stu_name','$work'
					   			        ,'$youtube_link')";	
if (!mysqli_query($mysqli,$sql)) {
  die('Error: ' . mysqli_error($mysqli));
}
																 

header("location:student_gallery.php?pro=$menu");
?>										  
										  				   