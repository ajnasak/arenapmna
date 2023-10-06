 <!--image table-->
 
    <!-- dashboard contact area -->
<?php
    include("db.php");
    ?>
<div style="background: #00000003;box-shadow: 0 5px 20px rgb(0 0 0 / 33%);    margin-top: 50px;" class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Edit Arena image</h2>
                                 </div>
                              </div>
                              <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm">
                                    <table class="table table-striped">
                                       <thead>
                                          <tr>
                                             <th style="text-align:center;">Student name</th>
                                             <th style="text-align:center;">Catogery</th>
                                             <th style="text-align:center;">images</th>
                                             <th style="text-align:center;">Update</th>
                                             <th style="text-align:center;">delete</th>
                                          </tr>
                                       </thead>
                                       
              <?php
              $sql ="SELECT * FROM studentgallery";
              $result =$mysqli->query($sql);
              if ($result->num_rows > 0){
                  while ($row=$result -> fetch_assoc())
              {
              ?>
              <tr>
                  
                  <td><?php echo $row['stu_name'];?></td>
                  <td><?php echo $row['work'];?></td>
                 
                 
      
                  <td><img src="gallerystudent/<?php echo $row ['gallery'];?>" width ="120" height ="100"/></td>
                  <td align ="center"><a style="color:#fff; background:#000;border:1px solid #000;padding:5px;vertical-align:center !importent;" href="student_gallery_update.php?sa=<?php echo $row["id"];?>">update</a></td>
                  <td align ="center"><a style="color:#fff; background:#000;border:1px solid #000;padding:5px;" href="student_gallery_delete.php?sa=<?php echo $row["id"];?>">delete</a></td>
                 
              </tr>
              
              <?php
              }
          }
          ?>
                         
                                    </table>
                                 </div>
                              </div>
                           </div>




