<?php
echo "in page";
if(isset($_POST["Submit"]))
{
 
 $name=$_POST["name"];
 $email=$_POST["email"];   
 $password=md5($_POST["pwd"]);
 $mobile=$_POST["phone"];
 $birthdate=$_POST["birth"];
 $gender=$_POST["gender"];
 $address=$_POST["address"];
 
    $conn=new mysqli("localhost","root","","worker_info");
    
    if($conn->connect_error)
    {
        die("Connection Failed" . $conn->connect_error);
    
    }
    
    $sql="INSERT INTO customer_signin (`name`, `email`, `password`, `mobile`, `birthdate`, `gender`, `address` )
     VALUES ('$name','$email','$password','$mobile','$birthdate','$gender','$address' )";
    
     $result=$conn->query($sql);
    
    if($result)
   {
    header('location:index.php?member="true"');
 }
 else
 {
    header('location:index.php?update="false"');
   echo"Failed";
 }
}

   


?>
