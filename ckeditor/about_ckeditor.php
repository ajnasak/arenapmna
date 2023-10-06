<script src="ckeditor/ckeditor.js"></script>
	<link href="ckeditor/sample.css" rel="stylesheet">           
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-8">
                   <form action="vaccine_update.php" method="post" enctype="multipart/form-data" id="formID" class="formular">
                    <h1 class="page-header">Offers</h1>   
                                     
                                            <div class="form-group">
                                            <label>Offers Details</label>
                                            <textarea id="editor1" class="form-control validate[required]" row="3"  name="offers" value="<?php echo $rows['offers'];?>"></textarea>                                   
                                        </div>
                                        <input type="hidden" name="ids" value="<?php echo $row['ids'];?>" >

                                        <button type="submit" class="btn btn-default">Submit Button</button>
                  </div>
                    </div>
              </form>
                    


                </div>
              
				

            </div>
</div>

<script>


			CKEDITOR.replace( 'editor1' );

		</script>
    </div>
	



