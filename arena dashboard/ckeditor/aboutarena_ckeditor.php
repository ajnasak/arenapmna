
<div>

<?php
include("db.php");
$id=1;
$sql="SELECT *  FROM about WHERE id='$id'";
$result = $mysqli->query($sql);

// output data of each row
$row=mysqli_fetch_assoc($result); 

?> 
                   <form action="ckeditor/aboutarena_update.php" method="post" enctype="multipart/form-data" id="formID" class="formular">
                    <h1 class="page-header">ABOUT ARENA</h1>
                     

                     <!-- <div class="form-group">
                <label>Product Price</label>
                <input class="form-control" type="text" name="p_price">
                 
            </div>-->
      
                                     
                                            <div class="form-group">
                                            <label>Edite section</label>
                 <textarea id="editor1" class="form-control validate[required]" rows="3"  name="about"><?php echo $row['about'];?></textarea>

                 
                                            
                                        </div>
                                        
                                           

                                        <input type="hidden" name="id" id="id" value="<?php echo $row['id'];?>">
                                        <input style="color:#fff; background:#000;border:1px solid #000;padding:5px;cursor: pointer;margin-bottom:50px;" type="submit" name="button" id="button" value="submit"/>

              </form>
                    
                <script>

// This call can be placed at any point after the
// <textarea>, or inside a <head><script> in a
// window.onload event handler.

// Replace the <textarea id="editor"> with an CKEditor
// instance, using default configurations.

CKEDITOR.replace( 'editor1' );

</script>