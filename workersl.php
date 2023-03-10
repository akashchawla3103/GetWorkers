<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="stylesidebar.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
  <title>Workers List</title>
</head>

<?php
session_start();
$_SESSION['loggedin'] = true;
$_SESSION['customer']=true;

?>

<body>

         

      <?php require_once "csidebar.php";?>

  <div id="main"> 
  <h6 class="display-6" style="margin-left: 700px; color: black"><strong>Workers</strong></h6><br>

  <div class="row">

    <div class="col-md-4 text-center">
      <form action="workerlist.php" method="POST">
        <div class="card" style="width: 23rem; height: 25rem; margin-top:15px ;margin-left: 50px; border-color:darkgoldenrod; border-radius: 10%; background-color: cornflowerblue; ">
          <img src="images/electrician.png" class="card-img-top" alt="electrician" style="width: 85%;padding-left: 65px;padding-top:22px;">
          <div class="card-body text-center">
            <input type="submit" value="Electrician" name="Electrician" class="nav-item btn btn-outline-warning" role="button" style="color: black; width: 50%; border-radius: 10%;">
          </div>
        </div>
      </form>
    </div>


    <div class="col-md-4 text-center">
      <form action="workerlist.php" method="POST">
        <div class="card border-danger" style="width: 23rem; height: 25rem; margin-top:15px ;margin-left: 50px; border-radius: 10%; background-color: rgb(248, 186, 14);">
          <img src="images/carpe.png" class="card-img-top" alt="Carpenter" style="width: 85%;padding-left: 65px;padding-top:22px;">
          <div class="card-body text-center">
            <input type="submit" value="Carpenter" name="Carpenter" class="nav-item  btn btn-outline-light" role="button" style="color: black; width: 50%; border-radius: 10%; ">
          </div>
        </div>
      </form>
    </div>


    <div class="col-md-4 text-center">
      <form action="workerlist.php" method="POST">
        <div class="card border-info" style="width: 23rem; height: 25rem; margin-top:15px ;margin-left: 50px;  border-radius: 10%; background-color: yellowgreen;">
          <img src="images/plumber.png" class="card-img-top" alt="Plumber" style="width: 85%;padding-left: 65px;padding-top:22px;">
          <div class="card-body text-center">
            <input type="submit" value="Plumber" name="Plumber" class="nav-item btn btn-outline-danger " role="button" style="color: black; width: 50%; border-radius: 10%;">
          </div>
        </div>
    </div>
    </form>
  </div>

  <div class="row">
    <div class="col-md-4 text-center">
      <form action="workerlist.php" method="POST">
        <div class="card" style="width: 23rem; height: 25rem; margin-top:15px ;margin-left: 50px; border-radius: 10%; background-color: pink;">
          <img src="images/cleaner.png" class="card-img-top" alt="Cleaner" style="width: 85%;padding-left: 65px;padding-top:22px;">
          <div class="card-body text-center">
            <input type="submit" value="Cleaner" name="Cleaner" class="nav-item btn btn-outline-success " role="button" style=" width: 50%; border-radius: 10%;">
          </div>
        </div>
      </form>
    </div>

    <div class="col-md-4 text-center">
      <form action="workerlist.php" method="POST">
        <div class="card border-secondary" style="width: 23rem; height: 25rem; margin-top:15px ;margin-left: 50px;border-radius: 10%;background-color: lightgreen;">
          <img src="images/gardener.png" class="card-img-top" alt="gardener" style="width: 85%;padding-left: 65px;padding-top:22px;">
          <div class="card-body text-center">
            <input type="submit" value="Garderner" name="Garderner" class="nav-item btn btn-outline-danger " role="button" style=" width: 50%; border-radius: 10%;">
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-4">
      <form action="workerlist.php" method="POST">
        <div class="card" style="width: 23rem; height: 25rem; margin-top:15px ;margin-left: 50px;border-radius: 10%;background-color: brown;">
          <img src="images/worker.png" class="card-img-top" alt="worker" style="width: 85%;padding-left: 65px;padding-top:22px;">
          <div class="card-body text-center">
            <input type="submit" value="Mason" name="Mason" class="nav-item btn btn-outline-info " role="button" style=" width: 50%; border-radius: 10%;">
          </div>
        </div>
      </form>
    </div>
  </div>


  </div>
</body>

</html>