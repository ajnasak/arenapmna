<div style="box-shadow: 0 5px 20px rgb(0 0 0 / 33%);background: #f3f3f3 padding: 10px;padding:20px;" id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6">
                   <form action="student_gallery_add_back.php" method="post" enctype="multipart/form-data" id="formID" class="formular">
                    <h1 style="font-weigth:600px;" class="page-header">Image Add</h1>
                     

                <div class="form-group">
                <label>Student Name</label>
                <input class="form-control" type="text" name="stu_name">
                <label for="work">Choose catogery:</label>

<select style="background: #000;height: 37px;color: #fff;margin-top: 20px;" type="text" name="work" id="work">
  
  <option value="Graphic Design">Graphic Design</option>
  <option value="3D Asset Design">3D Asset Design</option>
  <option value="Motion Graphics">Motion Graphics</option>
  <option value="Web Design">Web Design</option>
</select>
            </div>

           <div class="form-group">
             <label>Image </label>
                                            <input type="file" name="img1" class="validate[required]">
                                        </div>
                                        <button type="submit" class="btn btn-default">Submit</button>
                       </div>
                    </div>
              </form>
          </div>
     </div>
</div>

