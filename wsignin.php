<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- <link rel="stylesheet" type="text/css" href="stylewsignin.css"> -->
  <link rel="stylesheet" type="text/css" href="wsignin.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <title>workersignin</title>
</head>

<body>
  <?php
  $result = 0;
  $Availability = 1;
  // $uploadErr =$upload= ""
  $nameErr = $emailErr = $passwordErr = $mobileErr = $birthErr = $genderErr = $addressErr = $workErr = $experienceErr = $conditionsErr = "";
  $name = $email = $password = $mobile = $birth = $gender = $address = $work = $experience = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["wname"])) {
      $nameErr = "Name is required";
      $result = 0;
    } else {
      $name = test_input($_POST["wname"]);
      $result = 1;
    }

    if (empty($_POST["wemail"])) {
      $emailErr = "Email is required";
      $result = 0;
    } else {
      $email = test_input($_POST["wemail"]);
      $result = 1;
    }

    if (empty($_POST["wpassword"])) {
      $passwordErr = "Password is required";
      $result = 0;
    } else {
      $password = md5(test_input($_POST["wpassword"]));
      $result = 1;
    }

    if (empty($_POST["wmobile"])) {
      $mobileErr = "Mobile Number Required";
      $result = 0;
    } else {
      $mobile = test_input($_POST["wmobile"]);
      $result = 1;
    }

    if (empty($_POST["wbirth"])) {
      $birthErr = "BirthDate is required";
      $result = 0;
    } else {
      $birthdate = test_input($_POST["wbirth"]);
      $result = 1;
    }

    if (empty($_POST["wgender"])) {
      $genderErr = "Gender is required";
      $result = 0;
    } else {
      $gender = test_input($_POST["wgender"]);
      $result = 1;
    }

    if (empty($_POST["waddress"])) {
      $addressErr = "Address is required";
      $result = 0;
    } else {
      $address = test_input($_POST["waddress"]);
      $result = 1;
    }

    if (empty($_POST["wworker"])) {
      $workErr = "Work is required";
      $result = 0;
    } else {
      $work = test_input($_POST["wworker"]);
      $result = 1;
    }

    if (empty($_POST["wexperience"])) {
      $experienceErr = "Experience is required";
      $result = 0;
    } else {
      $experience = test_input($_POST["wexperience"]);
      $result = 1;
    }
    // echo $result;
  }

  function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  if ($result == 1) {

    $conn = new mysqli("localhost", "root", "", "worker_info");//oobj

    if ($conn->connect_error) {
      die("Connection Failed" . $conn->connect_error);
    } else {
      echo "sucess conn";
    }
    echo "connection established";


    $sql = "INSERT INTO worker1 (`name`, `email`, `password`, `mobile`, `birthdate`, `gender`, `address`,`work`,`experience`,`availability`) VALUES
     ('$name','$email','$password','$mobile','$birthdate','$gender','$address','$work','$experience',1)";

    $result1 = $conn->query($sql);//obj
   // mysqli_query($conn,$sql); procedure
    if ($result1) {
      header("location: index.php?worker_signin='true'");
    } else {
      echo "Please Check your internet Connection";
    }
  }
  ?>

  <div class="main">
    <!-- Form -->
    <div>
    <a href="index.php"><img class="logo" src="images/3.png" alt="logo"></a>
    </div>
    <h6 class="display-6">SignIn</h6><br>

    <div class="form-box">
      <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>" class="wsignin" enctype="multipart/form-data">
        <div class="row">
          <div class="col-md-6">
            <label for="inputfirstname" class="form-label">Name</label>
            <input type="text" name="wname" class="form-control" id="wname" value="<?php echo $name; ?>" placeholder="Name">
            <span class="error">* <?php echo $nameErr; ?></span>
          </div>

          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" name="wemail" class="form-control" id="wemail" value="<?php echo $email; ?>" placeholder="Email">
            <span class="error">* <?php echo $emailErr; ?></span>

          </div>

          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Password</label>
            <input type="password" name="wpassword" class="form-control" id="wpassword4" value="<?php echo $password; ?>" placeholder="Password">
            <span class="error">* <?php echo $passwordErr; ?></span>

          </div>

          <div class="col-md-6">
            <label for="mobile" class="form-label">Mobile</label>
            <input type="phone" name="wmobile" class="form-control" id="mobile" value="<?php echo $mobile; ?>" placeholder="10 digit Number">
            <span class="error">* <?php echo $mobileErr; ?></span>

          </div>

          <div class="col-md-6">
            <label for="Birthdate" class="form-label">Birthdate</label>
            <input type="date" name="wbirth" class="form-control" id="Birthdate" value="<?php echo $birth; ?>">
            <span class="error"> <?php echo $birthErr; ?></span>

          </div>

          <div class="col-md-6">
            <label for="gender" class="form-label">Gender</label>
            <select id="gender" name="wgender" class="form-select" value="<?php echo $gender; ?>">
              <option> </option>
              <option>Male</option>
              <option>Female</option>
              <option>Other</option>
            </select>
            <span class="error">* <?php echo $genderErr; ?></span>
          </div>

          <div class="col-md-6">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" name="waddress" class="form-control" id="inputAddress" placeholder="1234 Main St" value="<?php echo $address; ?>">
            <span class="error">* <?php echo $addressErr; ?></span>

          </div>

          <div class="col-md-6">
            <label for="workerstatus" class="form-label">Work</label>
            <select id="workerstatus" name="wworker" class="form-select">
              <option> </option>
              <option>Electrican</option>
              <option>Carpenter</option>
              <option>Plumber</option>
              <option>Mason</option>
              <option>Cleaner</option>
              <option>Gardener</option>
            </select>

            <span class="error">* <?php echo $workErr; ?></span>
          </div>

          <div class="col-md-6">
            <label for="experience" class="form-label">Experience</label>
            <select id="experience" name="wexperience" class="form-select">
              <option></option>
              <option>1-3 Years</option>
              <option>4-6 Years</option>
              <option>7-10 Years</option>
            </select>
            <span class="error">* <?php echo $experienceErr; ?></span>

          </div>


          <!-- <div class="form-group" style="padding-top: 15px;">
          Select image to upload:
    <input type="file" name="wUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">

        </div>
 -->

          <div class="col-md-6">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck" required>
              <label class="form-check-label" for="gridCheck">
                Accept Terms and Conditions.
              </label>
            </div>
            <span class="error">* <?php echo $conditionsErr; ?></span>
          </div>
          
          <div class="col-12" style="text-align: center; ">
          <button id="s_btn" type="submit" class="btn btn-primary">Sign in</button>
        </div>
          
      </form>
    </div>
  </div>
  </div>

</body>

</html>