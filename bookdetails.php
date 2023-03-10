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

  <style>
    .error {
      color: red;
    }
  </style>
</head>

<body>

  <?php
  //Session Control
  session_start();
  $_SESSION['loggedin'] = true;
  if (isset($_POST["view"])) {
    $_SESSION['w_id'] = $_POST["book_id"];
  }
  ?>

  <body style="background-color: white;">
    <div class="nav-item" style="float: right; padding-top: 55px; padding-right: 10px;">
      <a class="nav-item btn btn-outline-danger" href="logout.php" role="button" style="color: white; background-color: #ff7c4d; "> Log out</a>
    </div>
    <a href="index.php"><img src="images/3.png" alt="" width="15%" style="margin-left: 650px;"></a>
    <br>
    <h6 class="display-6  text-center" style=" color: black">Bookdetails</h6><br>
    <h4 style="text-align: center;">Please Choose Date For the Service</h4>

    <?php
    $result = 0;
    $dateErr = $servicedate = "";
    $w_id = 0;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      if (empty($_POST["servicedate"])) {
        $dateErr = "Date is required";
        $result = 0;
      } else {
        $servicedate = test_input($_POST["servicedate"]);
        $result = 1;
      }
    }



    function test_input($data)
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    if ($result == 1) {

      $conn = new mysqli("localhost", "root", "", "worker_info");

      if ($conn->connect_error) {
        die("Connection Failed" . $conn->connect_error);
      } else {
        echo "sucess conn";
      }
      echo "connection established";

      $c_id = $_SESSION['customer_id'];
      $w_id = $_SESSION['w_id'];
      echo $w_id;
      $sql = "INSERT INTO  records (`c_id`, `w_id`, `servicedate`,`Payment(Rs)`) VALUES ('$c_id','$w_id','$servicedate','500')";

      $result = $conn->query($sql);
      $sql1="UPDATE worker1 SET  `availability` = 0 WHERE id =$w_id";
      $result1 = $conn->query($sql1);
      if ($result && $result1) {
        header('location: index.php?book="true"');
      } else {
        echo "Please Check your internet Connection";
      }
    }

    
    

    ?>
    <!-- Form -->

    <form style="margin-left: 670px;" method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>" class="wsignin" enctype="multipart/form-data" style="width: 100%">

    <div class="col-md-12">
    <!-- <h6 class="display-6 " style=" color: black">Bookdetails</h6><br>
    <h4>Please Choose Date For the Service</h4> -->

        <label for="servicedate" class="form-label">Date</label>
        <input type="date" name="servicedate" class="form-label" id="date" required>
        <br>
        <br>
     
      </div>
      <div class="col-md-12">
        <label  class="form-label">Payment</label>
        <br>
        <img src="images/qr.png" alt="" style="padding: 22px; border:#ff7c4d solid" >
        <!-- <input type="hidden" name="servicedate" class="form-label" id="date" value="500"> -->
        <br>
     
      </div>
      <div class="col-md-12" style="margin-left: 95px; padding-top:15px">
        <button style="background-color: orangered;" type="submit" class="btn btn-primary" style="border:#ff7c4d">Confirm</button>
      </div>
    </form>

        </div>
      </div>
    </form>
  </body>

</html>