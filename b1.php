<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> -->
</head>
<style>

</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: orangered;">
        <div class="container-fluid" style="background-color: orangered;">
            <a class="navbar-brand" href="#">WebWorkers</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#Home">Home</a>
                    </li>
                    <?php
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
                        echo '<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Worker
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
        <li><a class="dropdown-item" href="#">Login</a></li>
        <li><a class="dropdown-item" href="#">Register</a></li>
        <li>
            <hr class="dropdown-divider">
        </li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
    </ul>
</li>';
                    }
                    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                        echo '<li class="nav-item">
              <a class="nav-item btn btn-outline-danger " href="logout.php" role="button" style="color: black; ">Logout</a>
            </li>  ';
                    }

                    ?>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="home">
        <!-- Design -->
        <div class="container">
            <div class="row">
                <div class="col-sm-6 image">
                    <div class="image">
                        <img src="images/1.png" class="img-fluid" alt="...">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="row" class="title">
                        <a class="logo img-fluid" href="admin_login.php"><img src="images/3.3.png" alt="" width="100%"></a>
                        <h1 class="display-1 title"><strong>Find workers<br> with great skills. </strong></h1>
                        <h1 class="title"><strong>Hire Us</strong></h1>
                        <h3 class="title" style="color: rgb(114, 60, 24);"> In todays busy world we <br>provide people workers <br>
                            for different purposes in <br>their day-to-day life.</h3>
                        <?php

                        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                        } else {
                        ?>

                            <div class="d-grid gap-2 d-md-block c_button">
                                <button class="btn btn-outline" type="button" data-toggle="modal" data-target="#myModal" style="color:white ;background-color:red;">Login</button>
                                <button class="btn" type="button" data-toggle="modal" data-target="#myModal1" style=" color:white; background-color: orangered;">Signin</button>
                            </div>

                        <?php } ?>
                    </div>

                </div>

            </div>
        </div>

    </section>



</body>

</html>