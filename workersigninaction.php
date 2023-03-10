<?php
  $result = 0;
  $Availability = 1;
  // $uploadErr =$upload= ""
  $nameErr = $emailErr = $passwordErr = $mobileErr = $birthErr = $genderErr = $addressErr = $workErr = $experienceErr = $conditionsErr = "";
  $name = $email = $password = $mobile = $birth = $gender = $address = $work = $experience = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
      $name = test_input($_POST["wname"]);
      $email = test_input($_POST["wemail"]);
      $password = md5(test_input($_POST["wpassword"]));
      $mobile = test_input($_POST["wmobile"]);
      $birthdate = test_input($_POST["wbirth"]);
      $gender = test_input($_POST["wgender"]);
      $address = test_input($_POST["waddress"]);
      $work = test_input($_POST["wworker"]);
      $experience = test_input($_POST["wexperience"]);
  }

  function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
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

  ?>
