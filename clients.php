<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="stylesidebar.css">
  <!-- <link rel="stylesheet" type="text/css" href="workercss/client.css"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <style>
    body {
      background-color: blue;
    }
  </style>
</head>

<body>

  <?php
  session_start();
  $_SESSION['loggedin'] = true;
  require_once "wsidebar.php";
  $conn = new mysqli("localhost", "root", "", "worker_info");
  $wid = $_SESSION['worker_id'];
  $currentdate = date("Y/m/d");
  // Update Message
  if (isset($_GET['update'])) {
    echo
    '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>  Information Updated !</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
  }
  $sql2 = "Select availability from worker1 where (id='$wid')";
  $result2 = mysqli_query($conn, $sql2);
  $row = mysqli_fetch_assoc($result2);
  if ($row['availability'] == 0) {
    echo '<div class="alert alert-danger" role="alert" style="text-align: center;">
    <h3>Are You Free Now!!!</h3>
    <br>
    <a class="btn btn-outline-danger" href="updateworkerstatus.php" role="button" style="color: white; background-color: #ff7c4d">Yes</a>
    <a class="btn btn-outline-danger " data-dismiss="alert" role="button" style="color: white; background-color: #ff7c4d">Not Yet</a>
    </button>
  </div>';
  }





  if ($conn->connect_error) {
    die("Connection Failed" . $conn->connect_error);
  } else {
    // echo "sucess conn";
  }
  // echo "connection established";

  $sql = "Select c_id, servicedate from records where (w_id='$wid' AND servicedate='$currentdate')";
  $result = mysqli_query($conn, $sql);
  $numRows = mysqli_num_rows($result);

  
  if ($numRows  > 0) { 
    $row = mysqli_fetch_assoc($result);
    $cid = $row['c_id'];
    $servicedate = $row['servicedate'];
    $sql1 = "Select customer_signin.name,customer_signin.email,customer_signin.mobile,customer_signin.address
    FROM customer_signin WHERE  customer_signin.id=$cid ";

    $result1 = mysqli_query($conn, $sql1);
    $row1 = mysqli_fetch_assoc($result1);
  ?>
    <div class="alert alert-success" role="alert">
      <h5 class="alert-heading">Date:<?php echo  date("d/m/Y") ?></h5>

      <h4 class="alert-heading">Client Details</h4>
      <hr>
      <p>Name:<?php echo $row1['name'] ?></p>
      <p>Email:<?php echo $row1['email'] ?></p>
      <p>Mobile:<?php echo $row1['mobile'] ?></p>
      <p>Address:<?php echo $row1['address'] ?></p>
      <p>Date:<?php echo $servicedate ?></p>

      <hr>
    </div>
  <?php
  } else {
    echo '   <div class="alert alert-success" role="alert">
    <h5 class="alert-heading">"No Work Today"</h5>
    </div>';
  }
  ?>

  <!-- Upcoming Orders -->
  <?php
  $sql = "Select c_id,servicedate from records where (w_id='$wid' AND servicedate>'$currentdate')";
  $result = mysqli_query($conn, $sql);
  $numRows = mysqli_num_rows($result);
  ?>

  <p>
    <a class="btn btn-danger center" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
      Upcoming Clients
      <span class="badge  bg-light" style="color: black;"> <?php echo "$numRows"; ?></span>
    </a>
  </p>
  <?php
  if ($numRows > 0) {
    while ($row = $result->fetch_assoc()) {
      $cid = $row['c_id'];
      $servicedate = $row['servicedate'];
      $sql1 = "Select customer_signin.name,customer_signin.email,customer_signin.mobile,customer_signin.address
      FROM customer_signin WHERE  customer_signin.id=$cid ";
      $result1 = mysqli_query($conn, $sql1);
      $row1 = mysqli_fetch_assoc($result1);

  ?>

      <div class="collapse" id="collapseExample">
        <div class="alert alert-success" role="alert">
          <h4 class="alert-heading">Client Details</h4>
          <hr>
          <p>Name:<?php echo $row1['name'] ?></p>
          <p>Email:<?php echo $row1['email'] ?></p>
          <p>Mobile:<?php echo $row1['mobile'] ?></p>
          <p>Address:<?php echo $row1['address'] ?></p>
          <p>Date:<?php echo $servicedate ?></p>

          <hr>
        </div>
      </div>
  <?php
    }
  }else{
    echo '   <div class="alert alert-success" role="alert">
    <h5 class="alert-heading">"No Results"</h5>
    </div>';
  }
  ?>

  <!-- Completed Orders -->

  <?php


  $sql = "Select c_id,servicedate from records where (w_id='$wid' AND servicedate<'$currentdate')";

  $result = mysqli_query($conn, $sql);
  $numRows = mysqli_num_rows($result);
  ?>
  <p>
    <a class="btn btn-success" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
      Completed Clients
      <span class="badge  bg-light" style="color: black;"> <?php echo "$numRows"; ?></span>
    </a>
  </p>
  <?php
  if ($numRows > 0) {
    while ($row = $result->fetch_assoc()) {
      $cid = $row['c_id'];
      $servicedate = $row['servicedate'];
      $sql1 = "Select customer_signin.name,customer_signin.email,customer_signin.mobile,customer_signin.address
      FROM customer_signin WHERE  customer_signin.id=$cid ";
      $result1 = mysqli_query($conn, $sql1);
      $row1 = mysqli_fetch_assoc($result1);

  ?>

      <div class="collapse" id="collapseExample1">
        <div class="alert alert-success" role="alert">
          <h4 class="alert-heading">Client Details</h4>
          <hr>
          <p>Name:<?php echo $row1['name'] ?></p>
          <p>Email:<?php echo $row1['email'] ?></p>
          <p>Mobile:<?php echo $row1['mobile'] ?></p>
          <p>Address:<?php echo $row1['address'] ?></p>
          <p>Date:<?php echo $servicedate ?></p>


          <hr>
        </div>
      </div>
  <?php
    }
  }else{
    echo '   <div class="alert alert-success" role="alert">
    <h5 class="alert-heading">"No Results"</h5>
    </div>';
  }
  ?>
</body>