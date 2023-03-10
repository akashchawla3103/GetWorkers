<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>getworkers.com</title>

  <!-- CSS only -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>



  <style>
    .navbar {
      width: 100%;
      position: s;
    }

    /* .home {
      padding-top: 100px;
    } */

    .image {
      width: 110%;
      /* height:550px; */
    }

    .btn-outline-primary {
      box-sizing: border-box;
      background-color: orangered;
      color: white;
      border: none;
      margin-top: 1rem;
    }

    .btn-outline-primary:hover {
      background-color: red;
      color: white;
      border: none;
    }

    .i {
      background-size: contain;
      width: 130%;
      padding-left: 0%;
      float: right;
      padding-right: 1px;
    }

    #btn1 {
      border: none;
      /* color: blueviolet; */
      border: orangered solid;
    }

    #btn2 {
      border: none;
      /* color: blueviolet; */
      border: orangered solid;
    }

    .error {
      color: red;
    }
    .sucess
    {
      visibility: hidden;
    }
  </style>
</head>

<body>

  <?php

  session_start();
  if (isset($_GET['book'])) {
  ?>
    <script>
      Swal.fire(
        'Done!',
        'Worker Booked Sucessfully!',
        'success'
      )
    </script>
  <?php
  }

  if (isset($_GET['formfilled'])) {
  ?>
    <script>
      Swal.fire(
        'Done!',
        'Form Filled Sucessfully!',
        'success'
      )
    </script>
  <?php
  }

  if (isset($_GET['worker_signin'])) {
  ?>
    <script>
      Swal.fire(
        'Done!',
        'Congrats! You are a member now ',
        'success'
      )
    </script>
  <?php
  }



  if (isset($_GET['emailerror'])) {
  ?>
    <script>
      Swal.fire(
        'Invalid Email!',
        'Login Again ',
        'error'
      )
    </script>
  <?php
  }


  if (isset($_GET['passworderror'])) {
  ?>
    <script>
      Swal.fire(
        'Invalid Password!',
        'Login Again ',
        'error'
      )
    </script>
  <?php
  }

  if (isset($_GET['member'])) {
  ?>
    <script>
      Swal.fire(
        'Signin Sucessfully!',
        'You Are a Member Now',
        'success'
      )
    </script>
  <?php
  }

  echo '
  <!-- Landing Page -->
  <!-- Navbar -->

  <section class="navbar">';
  ?>
  <?php
  echo '  <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color:orangered;">
      <div class="container-fluid">
        <img src="images/3.2.jpg" alt="" width="4%">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item">
              <a class="nav-item btn btn-outline-danger" href="#home" role="button" style="color: black;">Home</a>
            </li>';


  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    if (isset($_SESSION['customer']) && $_SESSION['customer'] == true) {
      echo '<li class="nav-item">
              <a class="nav-item btn btn-outline-danger " href="workersl.php" role="button" style="color: black;">Dashboard</a>
            </li>';
    }
    if (isset($_SESSION['worker']) && $_SESSION['worker'] == true) {
      echo '<li class="nav-item">
              <a class="nav-item btn btn-outline-danger " href="workerdashboard.php" role="button" style="color: black;">Dashboard</a>
            </li>';
    }
  } else {
    echo '<li class="nav-item">
              <a class="nav-item btn btn-outline-danger " id="gethired" href="wsignin.php" role="button" style="color: black;">Get
                Hired</a>
            </li>

            <li class="nav-item">
              <a class="nav-item btn btn-outline-danger " role="button" data-toggle="modal"
                data-target="#wModal1" style="color: black; "> Workers Login</a>
            </li>';
  }


  echo '<li class="nav-item">
              <a class="nav-item btn btn-outline-danger " href="#aboutus" role="button" style="color: black; ">About Us</a>
            </li>';
  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo '<li class="nav-item">
              <a class="nav-item btn btn-outline-danger " href="logout.php" role="button" style="color: black; ">Logout</a>
            </li>  ';
  }

  echo ' </section> ';



  ?>
  <!-- DESIGN SIDE -->

  <section class="home">
    <div class="container">
      <div class="row">
        <div class="col-6">
          <img class="i" src="images/1.png" alt="" width="110%">
        </div>
        <div class="col-lg-6">
          <div class="row">
            <?php
            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

              echo '  <img src="images/3.3.png" alt="" width="80%" style="padding-left: 25px; ">';
            } else {
              echo '  <a href="admin_login.php"><img src="images/3.3.png" alt="" width="80%" style="padding-left: 25px; "></a>';
            }

            ?>
            <h1 class="display-1" style="padding-left: 87px;">Find workers <br>with great skills.</h1>
            <h1 style="padding-left: 87px;"><strong>Hire Us</strong></h1>
            <h3 style="padding-left: 87px; color: rgb(114, 60, 24);"> In todays busy world we <br>provide people workers <br>
              for different purposes in <br>their day-to-day life.</h3>
            <?php

            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            } else { ?>


              <button type="button" id="btn2" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="width: 20%;background-color: rgb(255, 73, 1); margin-left: 85px;">LogIn</button>



              <button type="button" id="btn1" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1" style="width: 20%;background-color: rgb(255, 73, 1); margin-left: 5px;">SignIn</button>
            <?php }
            echo ' </div> 
  </div>
  </div>
  </div>

 </section>
<!-- Landing Page close -->
 
  <!-- Customer lOGIN LOGIC -->

  <section class="login">';
            require_once "customerloginmodal.php";

            echo '</section>
<!-- Login Ends -->

<!-- Workers lOGIN LOGIC -->

<section class="w_login" id="w_login">';
            require_once "workerloginmodal.php";
            echo '</section>

<!-- WorkersLogin Ends -->

 <!-- User Signin -->

  <section class="usersignIn">

    <div class="row">

      <div class="modal fade bd-example-modal-lg" id="myModal1" role="dialog">';

            require_once "usersigninmodal.php";

            echo '  </div>
          </div>

        </div>
      </div>
  </section>

  <!--   About Us Page  -->

  <section id="aboutus" >';

            require_once "ab1.php";
            ?>
            <!--  Page Footer -->

            <section id="foot">
              <!-- <footer class="bg-dark text-center text-white" style="color: orangered;"> -->

              <?php
              require_once "TEMP/footer.php";
              echo ' 
  </section>
</body>
</html>';
              ?>