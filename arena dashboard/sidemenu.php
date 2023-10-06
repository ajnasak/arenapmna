<?php
include ("session.php");
?>
<nav style="left:0;top:0;" id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="index.php"><img class="logo_icon img-responsive" src="images/logo/logo-icon.png" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        
                        <div class="user_info">
                           <h6>Dashboard</h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>Menu</h4>
                  <ul class="list-unstyled components">
                     <li><a href="index.php"><i class="fa-solid fa-file-lines" style="color: #ffd43b;"></i> <span>Home page</span></a></li>
                     <li><a href="tables.php"><i class="fa fa-table purple_color2"></i> <span>About</span></a></li>

                     <li>
                        <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa-solid fa-photo-film" style="color: #1297d9;"></i><span>Gallery</span></a>
                        <ul class="collapse list-unstyled" id="element">
                           <li><a href="arena_gallery.php"> <span>Arena Gallery</span></a></li>
                           <li><a href="student_gallery.php"> <span>Students Gallery</span></a></li>
                           
                        </ul>
                     </li>
                     
                     <li><a href="map.php"><i class="fa-solid fa-map-location-dot" style="color: #0af0b6;"></i><span>Map</span></a></li>
                  </ul>
               </div>
            </nav>