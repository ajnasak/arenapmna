<?php
    session_start();
    if(!isset($_SESSION['password']))
    {
      header("location:../admin/login-user.php?msg=2");
    }
       include('db.php')

    ?>