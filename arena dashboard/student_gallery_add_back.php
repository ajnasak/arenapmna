 <?php
//include database configuration file
include("db.php");
$stu_name=mysqli_real_escape_string($mysqli , $_POST['stu_name']);
$work=mysqli_real_escape_string($mysqli , $_POST['work']);

if(!empty($_FILES["img1"]['tmp_name'])){
$temp1 = explode(".",$_FILES["img1"]["name"]);
$newfilename1 = rand(). "_".date('m-d-Y_hia') . '.' .end($temp1);
move_uploaded_file($_FILES['img1']['tmp_name'],"gallerystudent/".$newfilename1);
$img1=$newfilename1;
}

$sql		 =   "INSERT INTO  studentgallery(stu_name,work
                                       ,gallery)
					   			 VALUES	('$stu_name','$work'
					   			        ,'$img1')";	
if (!mysqli_query($mysqli,$sql)) {
  die('Error: ' . mysqli_error($mysqli));
}
																 

header("location:student_gallery.php?pro=$menu");
?>										  
										  				   