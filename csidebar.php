<?php

       echo' 
       <body style="background-color: white;">
        <div class="nav-item" style="float: right; padding-top: 55px; padding-right: 10px;">
          <a class="nav-item btn btn-outline-danger" href="logout.php" role="button" style="color: white; background-color: #ff7c4d; "> Log out</a>
        </div>
        <span style="font-size:40px;color: orangered; cursor:pointer;padding-left:10px" onclick="openNav()">&#9776;</span>

        <a href="index.php"><img src="images/3.png" alt="" width="15%" style="margin-left: 600px;"></a>



        <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <a href="workersl.php">Workers</a>
          <a href="workerdashboard.php#Profile">Profile</a>
          <a href="logout.php">Logout</a>
        </div>

        <script>
          function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
           document.getElementById("main").style.marginLeft = "250px";
           document.body.style.backgroundColor = "rgba(0,0,0,0.2)";

          }

          function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
            document.body.style.backgroundColor = "white";
          }
        </script>';
?>