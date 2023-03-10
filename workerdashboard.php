<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="stylesidebar.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
  <title>Dashboard</title>
  <style>
    #update{
      width: 40%;
      border: none;
    }
  @media only screen and (min-width: 400px) {
    #update{
      width: 10%;
      border: none;
    }
    .logo
    {
      /* display: none; */
      width: 5%;
    }
  }
  
  </style>
</head>

<body>
<!-- <img src="images/3.3.png" alt=""> -->
  <?php
  session_start();
  $_SESSION['loggedin'] = true;
  $wemail=$_SESSION['email'];
  // Update Message
  if (isset($_GET['update'])) {
    echo '<div class="alert alert-warning" role="alert">
        Information Updated 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>';
  }


  if (isset($_SESSION['customer']))
  {
   
  //  echo "Customer";
   if (isset($_SESSION['loggedin']) && ($_SESSION['loggedin'] = true)) 
   { 
     $updatepage="updatecustomer.php";
     $conn = new mysqli("localhost", "root", "", "worker_info");

     if ($conn->connect_error) 
     {
       die("Connection Failed" . $conn->connect_error);
     }
     $sql = "Select * from customer_signin where ( email='$wemail')";

     $result1 = mysqli_query($conn, $sql);
     $numRows = mysqli_num_rows($result1);
     if ($numRows == 1) {
       $row = mysqli_fetch_assoc($result1);
     }
   }
 }

    //Worker Login

    if (isset($_SESSION['worker']))
     {
      if (isset($_SESSION['loggedin']) && ($_SESSION['loggedin'] = true)) 
      {
        $updatepage="updateworker.php";
        $conn = new mysqli("localhost", "root", "", "worker_info");

        if ($conn->connect_error) 
        {
          die("Connection Failed" . $conn->connect_error);
        }
        $sql = "Select * from worker1 where ( email='$wemail')";

        $result1 = mysqli_query($conn, $sql);
        $numRows = mysqli_num_rows($result1);
        if ($numRows == 1) {
          $row = mysqli_fetch_assoc($result1);
        }
      }
    }
  ?>

    
<?php
      if (isset($_SESSION['worker']))
      {
        require_once "wsidebar.php"; 
?>
      <!-- <body style="background-color: white;">
      <div class="nav-item" style="float: right; padding-top: 55px; padding-right: 10px;">
        <a class="nav-item btn btn-outline-danger" href="logout.php" role="button" style="color: white; background-color: #ff7c4d; "> Log out</a>
      </div>
      <span style="font-size:40px;color: orangered; cursor:pointer;padding-left:10px" onclick="openNav()">&#9776;</span>
      <a href="index.php"><img src="images/3.png" alt="" width="15%" style="margin-left: 600px;"></a>

      <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#Profile">Profile</a>
        <a href="#">Clients</a>
        <a href="logout.php">Logout</a>
      </div> -->
<?php
      }
?>

<?php
      if (isset($_SESSION['customer']))
      {
        require_once "csidebar.php";  

      }
?>

      <!-- <script>
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
      </script> -->

      <div id="main">

        <section id="Profile">
          <h1 class="display-1 text-center">Profile</h1>
          <div class="row">
            <form id="main" action="<?php echo $updatepage?>" method="post" style="color:red; margin:auto; width:70% ">
              <div class="row">
                <div class="col-md-6">
                  <label for="inputfirstname" class="form-label">Name</label>
                  <input type="text" name="uname" class="form-control" id="wname" placeholder="Name" value="<?php echo $row['name'] ?>">
                  <br>
                </div>

                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">Email</label>
                  <input type="email" name="uemail" class="form-control" id="wemail" placeholder="Email" value="<?php echo $row['email'] ?>">

                </div>


                <div class="col-md-6">
                  <label for="mobile" class="form-label">Mobile</label>
                  <input type="phone" name="umobile" class="form-control" id="mobile" placeholder="10 digit Number" value="<?php echo $row['mobile'] ?>" pattern="[789][0-9]{9}">
                  <br>

                </div>

                <div class="col-md-6">
                  <label for="Birthdate" class="form-label">Birthdate</label>
                  <input type="date" name="ubirth" class="form-control" id="Birthdate" max="2002-01-01"  value="<?php echo $row['birthdate'] ?>">
                </div>

                <div class="col-md-6">
                  <label for="gender" class="form-label">Gender</label>
                  <select id="gender" name="ugender" class="form-control">
                    <option><?php echo $row['gender'] ?> </option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Other</option>
                  </select>
                  <br>
                </div>

                <div class="col-md-6">
                  <label for="inputAddress" class="form-label">Address</label>
                  <input type="text" name="uaddress" class="form-control" id="inputAddress" placeholder="1234 Main St" value="<?php echo $row['address'] ?>">
                  <br>

                </div>
          <?php
           if (isset($_SESSION['worker']))
          {
              if (isset($_SESSION['loggedin']) && ($_SESSION['loggedin'] = true)) 
              {
                ?>
                  <div class="col-md-6">
                  <label for="workerstatus" class="form-label">Work</label>
                  <select id="workerstatus" name="uworker" class="form-control">
                    <option> <?php echo $row['work'] ?> </option>
                    <option>Electrican</option>
                    <option>Carpenter</option>
                    <option>Plumber</option>
                    <option>Mason</option>
                    <option>Cleaner</option>
                    <option>Gardener</option>
                  </select>

                </div>

                <div class="col-md-6">
                  <label for="experience" class="form-label">Experience</label>
                  <select id="experience" name="uexperience" class="form-control">
                    <option><?php echo $row['experience'] ?></option>
                    <option>1-3 Years</option>
                    <option>4-6 Years</option>
                    <option>7-10 Years</option>
                  </select>
                  <br>
                </div>
             <?php
              }
            }  
    ?>
                <div class="btn" style="float: right;">
                  <button type="submit" id="update" name="update" class="nav-item btn-lg btn-outline-danger"  style="color: white; background-color:orangered;">Update</button>
                </div>
            </form>

        </section>
      </div>
    </body>

</html>
<?php
  //  else {
  //   header('location:index.php');
  // }

?>