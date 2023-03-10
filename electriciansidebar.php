<?php

       echo' 
       <div class="nav-item" style="float: right; padding-top: 55px; padding-right: 10px;">
          <a class="nav-item btn btn-outline-danger" href="logout.php" role="button" style="color: white; background-color: #ff7c4d; "> Log out</a>
        </div>
        <span style="font-size:40px;color: orangered; cursor:pointer;padding-left:10px" onclick="openNav()">&#9776;</span>

        <a href="index.php"><img src="images/3.png" alt="" width="15%" style="margin-left: 600px;"></a>



        <div id="mySidenav" class="sidenav ">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <div class="btn-group-vertical">
          <form action="workerlist.php" method="POST">
          <a ><button type="submit" value="Electrician" name="Electrician" ; class="btn btn-secondary btn-lg">Electrician</button></a>
          </form>

          <form action="workerlist.php" method="POST">
          <a ><button type="submit" value="Carpenter" name="Carpenter" ; class="btn btn-secondary btn-lg">Carpenter</button></a>
          </form>

          <form action="workerlist.php" method="POST">
          <a ><button type="submit" value="Plumber" name="Plumber" ; class="btn btn-secondary btn-lg">Plumber</button></a>
          </form>

          <form action="workerlist.php" method="POST">
          <a ><button type="submit" value="Cleaner" name="Cleaner" ; class="btn btn-secondary btn-lg">Cleaner</button></a>
          </form>

          <form action="workerlist.php" method="POST">
          <a ><button type="submit" value="Garderner" name="Garderner" ; class="btn btn-secondary btn-lg">Garderner</button></a>
          </form>
          <form action="workerlist.php" method="POST">
          <a><button type="submit" value="Mason" name="Mason" ; class="btn btn-secondary btn-lg">Mason</button></a>
          </form>
          <form action="logout.php" method="POST">
          <a><button type="submit" value="Logout" name="Logout" ; class="btn btn-secondary btn-lg">Logout</button></a>
          </form>
     

        </div>
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