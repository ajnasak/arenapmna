<!-- youtube link add -->
<div style="box-shadow: 0 5px 20px rgb(0 0 0 / 33%); background: #f3f3f3; padding: 20px;margin-top:800px;" id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <form action="student_youtube_add_back.php" method="post" id="formID" class="formular">
                    <h1 style="font-weight: 600px;" class="page-header">YouTube  add</h1>

                    <div class="form-group">
                        <label>Student Name</label>
                        <input class="form-control" type="text" name="stu_name">
                    </div>

                    <div class="form-group">
                        <label>Choose category:</label>
                        <select style="background: #000; height: 37px; color: #fff;" name="work" id="work">
                            <option value="Graphic Design">Graphic Design</option>
                            <option value="3D Asset Design">3D Asset Design</option>
                            <option value="Motion Graphics">Motion Graphics</option>
                            <option value="Web Design">Web Design</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>YouTube Link</label>
                        <input class="form-control" type="text" name="youtube_link">
                    </div>

                    <!-- Add a hidden input field for 'id' -->
                    <input type="hidden" name="id" value="<?php echo $id; ?>">

                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
