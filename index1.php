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

  <style>
    .navbar {
      width: 100%;
    }
  </style>
</head>

<body>

  <?php
  session_start();
  echo

  '<!-- Landing Page -->
    <!-- Navbar -->
    <section class="navbar">
    <nav class="navbar navbar-expand-lg navbar-light-sticky" style="background-color:orangered;">
      <div class="container-fluid">
        <!-- <img src="images/worker.svg" width="3%" > -->
        <img src="images/3.2.jpg" alt="" width="4%">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item">
              <a class="nav-item btn btn-outline-danger" href="#" role="button" style="color: black;">Home</a>
            </li>';

  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo '<li class="nav-item">
              <a class="nav-item btn btn-outline-danger " href="workersl.php" role="button" style="color: black;">Dashboard</a>
            </li>';
  } else {
    echo '<li class="nav-item">
              <a class="nav-item btn btn-outline-danger " href="wsignin.php" role="button" style="color: black;">Get
                Hired</a>
            </li>

            <li class="nav-item">
              <a class="nav-item btn btn-outline-danger " role="button" data-toggle="modal"
                data-target="#wModal1" style="color: black; "> Workers Login</a>
            </li>';
  }


  echo '<li class="nav-item">
              <a class="nav-item btn btn-outline-danger " href="#foot" role="button" style="color: black; ">About Us</a>
            </li>';
  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo '<li class="nav-item">
              <a class="nav-item btn btn-outline-danger " href="logout.php" role="button" style="color: black; ">Logout</a>
            </li>   ';
  }
  echo '</section>

    <!-- DESIGN SIDE -->
  <div class="col-12">
    <div class="col-md-6">
      <img src="images/1.jpg" alt="" width="100%">
    </div>
  </div>
   

<div class="row">
    <a href="index.html"><img src="images/3.3.png" alt="" width="80%" style="padding-left: 25px; "></a>
    <h1 class="display-1" style="padding-left: 87px;">Find workers <br>with great skills.</h1>
    <h1 style="padding-left: 87px;"><strong>Hire Us</strong></h1>
    <h3 style="padding-left: 87px; color: rgb(114, 60, 24);"> In todays busy world we <br>provide people workers <br>
      for different purposes in <br>their day-to-day life.</h3>';

  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  } else {
    echo '<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"
      style="width: 10%;background-color: rgb(255, 73, 1); margin-left: 85px;">LogIn</button>';


    echo ' <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1"
      style="width: 10%;background-color: rgb(255, 73, 1); margin-left: 5px;">SignIn</button>';
  }
  echo ' </div> 
 

<!-- Landing Page close -->
 
  <!-- Customer lOGIN LOGIC -->

  <section class="login">
<form action="c_login.php" method="POST">
    <div class="modal fade modal-dialog-centered" id="myModal" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content" style="background-color:orangered;">

          <div class="modal-header">
            <h4 class="modal-title">Login</h4>
          </div>

          <div class="modal-body" style="background-color:white">
            <div class="row">
              <div class="col-md-12">
                <label for="c_email" class="form-label">Email</label>
                <input type="email" class="form-control" id="c_email" name="c_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"  " required required>
              </div>

              <div class="col-md-12">
                <label for="c_password" class="form-label">Password</label>
                <input type="password" class="form-control" id="c_password"  name="c_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,} 
                title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password"  required>
                
              </div>
            </div>
          </div>

          <div class="col-md-12" style="background-color:white">
            <button type="submit" class="btn btn-danger">Login</button>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>
  </form>
  </section>
<!-- Login Ends -->

<!-- Workers lOGIN LOGIC -->

  <section class="w_login">
<form action="wlogin.php" method="POST">
    <div class="modal fade modal-dialog-centered" id="wModal1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content" style="background-color:red">

          <div class="modal-header">
            <h4 class="modal-title">Login</h4>
          </div>

          <div class="modal-body" style="background-color:rgba(250,90,10)">
            <div class="row">
              <div class="col-md-12">
                <label for="c_email" class="form-label">Email</label>
                <input type="email" class="form-control" id="c_email" name="w_email" 
                pattern="[a-z0-9._%+-]+@getworkers.com" title:"[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                placeholder="Email must end with @getworkers.com " required>
              </div>

              <div class="col-md-12">
                <label for="c_password" class="form-label">Password</label>
                <input type="password" class="form-control" id="c_password"  name="w_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,} 
                title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password"  required>
                
              </div>
            </div>
          </div>

          <div class="col-md-12" style="background-color:rgba(250,90,10)">
            <button type="submit" class="btn btn-primary">Login</button>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>
  </form>
  </section>
<!-- WorkersLogin Ends -->
 <!-- User Signin -->

  <section class="usersignIn">

    <div class="row">

      <div class="modal fade bd-example-modal-lg" id="myModal1" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content" style="background-color:red">
            <div class="modal-header">
              <h4 class="modal-title">Signin</h4>
            </div>

            <div class="modal-body" style="background-color:rgba(250,90,10)">
              <form action="c_signin.php" class="wsignin" style="width: 100%;" method="POST">
                <div class="row">
                  <div class="row">
                    <div class="col-md-6">

                      <label for="fname" class="form-label">First Name</label>
                      <input type="text" class="form-control" name="fname" placeholder="First Name" required>
                    </div>

                    <div class="col-md-6">
                      <label for="lname" class="form-label">Last Name</label>
                      <input type="text" class="form-control" name="lname" placeholder="Last Name" required>
                    </div>


                    <div class="col-md-6">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                    </div>

                    <div class="col-md-6">
                      <label for="pwd" class="form-label">Password</label>
                      <input type="password" class="form-control" name="pwd"  placeholder="Password" required>
                    </div>

                    <div class="col-md-6">
                      <label for="phone" class="form-label">Mobile</label>
                      <input type="phone" class="form-control" name="phone" pattern="[0-9]{10}" placeholder="Enter 10 digit valid number" required>
                    </div>

                    <div class="col-md-6">
                      <label for="birth" class="form-label">Birthdate</label>
                      <input type="date" class="form-control" name="birth" max="2005-01-01" required>
                      
                    </div>

                    <!--     <div class="col-md-6">
                              <label for="inputState" class="form-label">City</label>
                              <select id="inputState" class="form-select" required>
                                  <option selected>Choose...</option>
                                  <option>Ichalkaranji</option>
                                  <option>Jasingpur</option>
                                  <option>Sangli</option>
                              </select>
                              </div> -->
                    <div class="col-md-6">
                      <label for="address" class="form-label">Address</label>
                      <input type="text" class="form-control" name="address" placeholder="1234 Main Station" required>
                    </div>
                    <!-- 
                          <div class="col-md-6">
                            <label for="inputZip" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="inputZip" required>
                          </div>
                   -->
                    <div class="col-md-6">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck" required>
                        <label class="form-check-label" for="gridCheck">
                          Accept Terms and Conditions.
                        </label>
                      </div>
                    </div>

                    <div class="col-12" style="text-align: center; padding-top: 10px;">
                      <button name="Submit" style="background-color: rgb(255, 0, 0);" type="submit"
                        class="btn btn-primary">Sign in</button>
                    </div>

                  </div>
                </div>
              </form>

              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>

        </div>
      </div>
  </section>

 <!--  Page Footer -->

  <section id="foot" style="padding-top: 150px;">'; ?>
     <!-- <footer class="bg-dark text-center text-white" style="color: orangered;"> -->
 
  <?php
  require_once "TEMP/footer.php";
  echo '  <!-- Copyright -->
        <!-- Footer -->
  </section>
</body>
</html>';
  ?>