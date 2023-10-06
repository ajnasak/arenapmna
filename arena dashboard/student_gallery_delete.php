<?php
include("db.php");
$id =$_GET['sa'];
$sql ="DELETE FROM  studentgallery WHERE id=$id";
if(mysqli_query($mysqli,$sql)){
    echo "record deleted succsessfully";
}else{
    echo "error deleting record".mysqli_error($mysqli);
}
header ('location:student_gallery.php')
?>


<?php
include("db.php");
$id =$_GET['sa'];
$sql ="DELETE FROM  youtube WHERE id=$id";
if(mysqli_query($mysqli,$sql)){
    echo "record deleted succsessfully";
}else{
    echo "error deleting record".mysqli_error($mysqli);
}
header ('location:student_gallery.php')
?>