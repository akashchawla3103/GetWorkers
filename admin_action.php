<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

  <title>Document</title>
</head>

<body>
  <?php
  session_start();
  $_SESSION['loggedin'] = true;

  echo '<body style="background-color: white;">
<div class="nav-item" style="float: right; padding-top: 55px; padding-right: 10px;">
  <a class="nav-item btn btn-outline-danger" href="logout.php" role="button" style="color: white; background-color: #ff7c4d; "> Log out</a>
</div>
<a href="a_dashboard.php"><img src="images/3.png" alt="" width="15%" style="margin-left: 650px;"></a>';

  if (isset($_POST["Edit"])) {
    $email = $_POST["uemail"];

    $updatepage = "adminupdateworker.php";
    $conn = new mysqli("localhost", "root", "", "worker_info");

    if ($conn->connect_error) {
      die("Connection Failed" . $conn->connect_error);
    }
    $sql = "Select * from worker1 where ( email='$email')";

    $result1 = mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result1);
    if ($numRows == 1) {
      $row = mysqli_fetch_assoc($result1);
    }

  ?>
    <div class="row">
      <form id="main" action="<?php echo $updatepage ?> " method="post" style="color:red; margin:auto; width:70% ">
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
            <input type="phone" name="umobile" class="form-control" id="mobile" placeholder="10 digit Number" value="<?php echo $row['mobile'] ?>">
            <br>

          </div>

          <div class="col-md-6">
            <label for="Birthdate" class="form-label">Birthdate</label>
            <input type="date" name="ubirth" class="form-control" id="Birthdate" value="<?php echo $row['birthdate'] ?>">
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

          <div class="btn" style="float: right;">
            <button type="submit" id="update" name="update" class="nav-item btn btn-outline-danger" style="color: white; width:10%; background-color:orangered;">Update</button>
          </div>
      </form>
    <?php
  }
  if (isset($_POST["Delete"])) {
    $email = $_POST["demail"];
    echo $email;
    $conn = new mysqli("localhost", "root", "", "worker_info");

    if ($conn->connect_error) {
      die("Connection Failed" . $conn->connect_error);
    }
    $sql = "DELETE FROM `worker1` WHERE ( email='$email')";

    $result1 = mysqli_query($conn, $sql);
    echo $result1;
    if ($result1) {
      header('location:a_dashboard.php?update="true"');
    } else {

      header('location:a_dashboard.php?updatefail="true"');
    }
  }
    ?>

</body>

</html>