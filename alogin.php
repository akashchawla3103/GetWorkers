<?php

// $showError="false";
// $passwordErr=" ";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
     $email=$_POST['admin_email'];
     $pass=($_POST['admin_password']);

     $conn=new mysqli("localhost","root","","worker_info");
     if($conn->connect_error)
     {
         die("Connection Failed" . $conn->connect_error);
     }

     $sql="Select * from admin where (admin_email='$email')";

     $result1=mysqli_query($conn,$sql);//procced
     $numRows=mysqli_num_rows($result1); 

     if($numRows==1)
     {
        $row=mysqli_fetch_assoc($result1);

        if($pass==$row['admin_password'])
        {
            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION["email"]=$email;
            $_SESSION['admin']=true;
            header('location:a_dashboard.php');
        }
        else
        {
            $_SESSION['loggedin'] = false;
            header('location:admin_login.php?passworderr="true"');
        }
     }
     else
     {
         $_SESSION['loggedin'] = false;
         header('location:admin_login.php?emailerr="true"');
     }
}
?>