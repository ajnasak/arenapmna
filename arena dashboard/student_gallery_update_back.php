<?php
// Include database configuration file
include("db.php");
$ids = mysqli_real_escape_string($mysqli, $_POST['id']);
$member_name = mysqli_real_escape_string($mysqli, $_POST['stu_name']);
$work = mysqli_real_escape_string($mysqli, $_POST['work']);

if (!empty($_FILES['img1']['tmp_name'])) {
    $temp1 = explode(".", $_FILES["img1"]["name"]);
    $newfilename1 = rand() . "_" . date('m-d-Y_hia') . '.' . end($temp1);
    move_uploaded_file($_FILES['img1']['tmp_name'], "gallerystudent/" . $newfilename1);
    $img1 = $newfilename1;

    $sql = "UPDATE studentgallery SET
            stu_name = '$member_name',
            work = '$work',
            gallery = '$img1' WHERE id='$ids'";
} else {
    $sql = "UPDATE studentgallery SET
            stu_name = '$member_name',
            work = '$work' WHERE id='$ids'";
}

if (!mysqli_query($mysqli, $sql)) {
    die('Error: ' . mysqli_error($mysqli));
}
// Properly escape the $menu variable
$menu = mysqli_real_escape_string($mysqli, $menu);
header("location: student_gallery.php?pro=$menu");
?>


<!--youtube-->

<?php
// Include database configuration file
include("db.php");
$id = mysqli_real_escape_string($mysqli, $_POST['id']);
$stu_name = mysqli_real_escape_string($mysqli, $_POST['stu_name']);
$work = mysqli_real_escape_string($mysqli, $_POST['work']);
$youtube_link = mysqli_real_escape_string($mysqli, $_POST['youtube_link']);



    $sql = "UPDATE youtube SET
            stu_name = '$member_name',
            work = '$work',
            youtube_link = '$youtube_link' WHERE id='$ids'";

if (!mysqli_query($mysqli, $sql)) {
    die('Error: ' . mysqli_error($mysqli));
}
// Properly escape the $menu variable
$menu = mysqli_real_escape_string($mysqli, $menu);
header("location: student_gallery.php?pro=$menu");
?>