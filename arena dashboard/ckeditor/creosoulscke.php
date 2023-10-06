

<?php
include("db.php");
$id=1;
$sql="SELECT *  FROM  creosouls WHERE id='$id'";
$result = $mysqli->query($sql);

// output data of each row
$row=mysqli_fetch_assoc($result); 

?> 
                   <form action="ckeditor/creosoulscke_update.php" method="post" enctype="multipart/form-data" id="formID" class="formular">

                     

                     <!-- <div class="form-group">
                <label>Product Price</label>
                <input class="form-control" type="text" name="p_price">
                 
            </div>-->
      
                                     
                                            <div class="form-group">
                                            <label>Edite creosouls section</label>
                 <textarea id="editor3" class="form-control validate[required]" rows="3"  name="creosoulscke"><?php echo $row['creosoulscke'];?></textarea>

                 
                                            
                                        </div>
                                        
                                           

                                        <input type="hidden" name="id" id="id" value="<?php echo $row['id'];?>">
                                        <input style="color:#fff; background:#000;border:1px solid #000;padding:5px;cursor: pointer;" type="submit" name="button" id="button" value="submit"/>

              </form>
                    
                <script>

// This call can be placed at any point after the
// <textarea>, or inside a <head><script> in a
// window.onload event handler.

// Replace the <textarea id="editor"> with an CKEditor
// instance, using default configurations.

CKEDITOR.replace( 'editor3' );

</script>