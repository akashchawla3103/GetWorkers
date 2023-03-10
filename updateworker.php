<?php
session_start();
// $role="worker";
// $result = 0;
// $Availability = 1;
$name = $email= $mobile = $birthdate = $gender = $address = $work = $experience = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name = test_input($_POST["uname"]);
  $email=test_input($_POST["uemail"]);
  $mobile = test_input($_POST["umobile"]);
  $birthdate = test_input($_POST["ubirth"]);
  $gender = test_input($_POST["ugender"]);
  $address = test_input($_POST["uaddress"]);
  $work = test_input($_POST["uworker"]);
  $experience = test_input($_POST["uexperience"]);
}
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo  $name ,$email ,$mobile,  $birthdate,  $gender, $address,  $work,  $experience;
  

    $conn = new mysqli("localhost", "root", "", "worker_info");

    if ($conn->connect_error) {
      die("Connection Failed" . $conn->connect_error);
    } 
    else 
    {
      
      
      
   $sql = " UPDATE `worker1` SET `name`='$name',`mobile`='$mobile',
   `birthdate`='$birthdate',`gender`='$gender',`address`='$address',`work`='$work',`experience`='$experience' WHERE `email`='$email'";

    $result1 = $conn->query($sql);
    if ($result1) 
    {
      echo "$name";
      header('location:workerdashboard.php?update="true"');
    }
    else 
    {
      echo "Please Check your internet Connection";
    }
}
    

  ?>

   



