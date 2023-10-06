<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   include("db.php");
   $id=$_GET ['sa'];
   $sql="SELECT * FROM studentgallery WHERE id= '$id'";
   $result=$mysqli->query($sql);
   if($result->num_rows>0){
    while($rows=$result->fetch_assoc()){
        ?>
        <table width="600" border="1" align="center" cellpading="0" cellspacing="0">
            <tr>
                <td><form action="student_gallery_update_back.php" method="post" enctype="multipart/form-data" id="formID" class="formular">
                <table width="600" border="1" cellspacing="0" cellpading="0">
                    <tr>
                        <td width="175">id</td>
                        <td width="419"><input type="text" name="id" value="<?php echo $rows['id'];?>"/></td>
                    </tr>
                    <tr>
                        <td>Student Name</td>
                        <td><input type="text" name="stu_name" value="<?php echo $rows['stu_name'];?>"/></td>
                    </tr>
                    <tr>
                        <td>category</td>
                        <td>                       <select type="text" name="work" id="work">
  
  <option value="Graphic Design">Graphic Design</option>
  <option value="3D Asset Design">3D Asset Design</option>
  <option value="Motion Graphics">Motion Graphics</option>
  <option value="Web Design">Web Design</option>
</select></td>
 
                    </tr>
                    <tr>
                        <td>image</td>
                        <td><input type="file" name="img1" class=""/></td>
                    </tr>
                  
                
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                            <input type="hidden" name="id" id="id" value="<?php echo $rows['id'];?>">
                            <input type="submit" name="button" id="button" value="submit"/>
                        </td>
                    </tr>

                </table>
                <?php
    }
}
                ?>
            </form>
        </td>
            </tr>
        </table>
<!---->
        <?php
   include("db.php");
   $id=$_GET ['sa'];
   $sql="SELECT * FROM youtube WHERE id= '$id'";
   $result=$mysqli->query($sql);
   if($result->num_rows>0){
    while($rows=$result->fetch_assoc()){
        ?>
        <table width="600" border="1" align="center" cellpading="0" cellspacing="0">
            <tr>
                <td><form action="student_gallery_update_back.php" method="post" enctype="multipart/form-data" id="formID" class="formular">
                <table width="600" border="1" cellspacing="0" cellpading="0">
                    <tr>
                        <td width="175">id</td>
                        <td width="419"><input type="text" name="id" value="<?php echo $rows['id'];?>"/></td>
                    </tr>
                    <tr>
                        <td>Student Name</td>
                        <td><input type="text" name="stu_name" value="<?php echo $rows['stu_name'];?>"/></td>
                    </tr>
                    <tr>
                        <td>category</td>
                        <td>                       <select type="text" name="work" id="work">
  
  <option value="Graphic Design">Graphic Design</option>
  <option value="3D Asset Design">3D Asset Design</option>
  <option value="Motion Graphics">Motion Graphics</option>
  <option value="Web Design">Web Design</option>
</select></td>
 
                    </tr>
                    <tr>
                    <td>youtube</td>
                        <td><input type="text" name="youtube_link" value="<?php echo $rows['youtube_link'];?>"/></td>
                    </tr>
                  
                
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                            <input type="hidden" name="id" id="id" value="<?php echo $rows['id'];?>">
                            <input type="submit" name="button" id="button" value="submit"/>
                        </td>
                    </tr>

                </table>
                <?php
    }
}
                ?>
            </form>
        </td>
            </tr>
        </table>
</body>
</html>