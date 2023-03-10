<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <!-- Font -->
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
    /* @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,300&display=swap'); */

    .display-4
    {
      font-family: 'Roboto', sans-serif;

    }
    .display-6 {
      font-family: 'Roboto', sans-serif;

    }

    .btn:hover {
      color: blue;
    }

    .navbar {
      width: 100%;
      position: fixed;
      font-family: 'Roboto', sans-serif;
      /* float:left;  */
      /* padding: 15px; */
    }

    .home {
      padding-top: 100px;
    }

    .hire {
      padding-left: 8%;
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
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light " style="background-color:orangered; ">
    <div class="container-fluid">
      <img src="images/3.2.jpg" alt="" width="4%">
      <!-- <h4 class="nav">Getworkers</h4> -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class=" nav navbar-nav">
          <a class=" nav-link active " type="button" aria-current="page" href="#home"><strong>Home</strong></a>
          <?php
          if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            if (isset($_SESSION['customer']) && $_SESSION['customer'] == true) {
              echo ' <a class="nav-link " type="button" aria-current="page" href="#home">Dashboard</a>';
            }
            if (isset($_SESSION['worker']) && $_SESSION['worker'] == true) {
              echo ' <a class="nav-link " aria-current="page" href="#home">Dashboard</a>';
            }
          } else {
            echo '    <a class="nav-link" href="#">Get Hired</a>
              <a class="nav-link" href="#">Workers Login</a>';
          }
          echo '  <a class="nav-link " href="#">About Us</a>';

          if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            echo ' <a class="nav-link" href="logout.php">Logout</a>';
          }
          ?>
        </div>
      </div>
    </div>
  </nav>

  <section class="home">
    <div class="container-fluid" style="size: 80%;">

      <div class="row">
        <div class="col-sm-6 col-md-6">
          <img src="images/1.jpg" class="img-fluid" alt="" width="100%" style="float:left;">
        </div>

        <div class="col-sm-6 col-md-6">

          <div class="row">
            <div class="col-sm-12 col-md-12">
              <a href="admin_login.php"><img src="images/3.3.png" alt="" width="80%"></a>

              <div class="col-sm-12 col-md-12" style=" padding-left:8%">
                <h4 class="display-4">Find workers <br>with great skills.</h4>
              </div>
              <div class="col-sm-12 col-md-12">
                <h1 class="hire"><strong>Hire Us</strong></h1>
                <div class="col-sm-12 col-md-12" style=" padding-left:8%">
                  <!-- <h4 class="display-6" style=" color: rgb(114, 60, 24)"> In todays busy world we <br>provide people workers <br>
                    for different purposes in <br>their day-to-day life.</h4> -->
                    <h3 style=" color: rgb(114, 60, 24);"> In todays busy world we <br>provide people workers <br>
              for different purposes in <br>their day-to-day life.</h3>
                </div>
                <?php
                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                } else
                {
                        
              echo'<button type="button" id="btn2" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="width: 20%;background-color: rgb(255, 73, 1); margin-left: 55px;">LogIn</button>
              <button type="button" id="btn1" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1" style="width: 20%;background-color: rgb(255, 73, 1); margin-left: 5px;">SignIn</button>';
                }
                // else {
                //   echo ' <div class="btn-group btn-group-justified" style="margin-left:8%;">
                //   <!-- <a href="#" class="btn btn-primary btn-lg btn-xs">Login</a> -->
                //   // <a type="button" class="btn  btn-lg" data-toggle="modal" data-target="#myModal" style="width: 10%;background-color: rgb(255, 73, 1); color:white">LogIn</a>
                //   // <a type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModal1" style="width: 10%;background-color: rgb(255, 73, 1); color:white">SignIn</a>

            
                // </div>';
                // }
                ?>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
    </div>

  </section>

  <!-- WorkersLogin Ends -->

  <!-- User Signin -->

  <section class="usersignIn">
    <div class="row">

      <div class="modal fade bd-example-modal-lg" id="myModal1" role="dialog">
        <?php
        require_once "landing/usersigninmodal.php";
        ?>
      </div>
    </div>
    
  </section>

</body>

</html>