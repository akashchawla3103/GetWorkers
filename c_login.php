<?php
$passwordErr=" ";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
     $email=$_POST['c_email'];
     $pass=md5($_POST['c_password']);
     

     $conn=new mysqli("localhost","root","","worker_info");
     if($conn->connect_error)
     {
         die("Connection Failed" . $conn->connect_error);
     
     }
     $sql="Select * from customer_signin where (email='$email')";
    //  echo $pass;
     $result1=mysqli_query($conn,$sql);
     $numRows=mysqli_num_rows($result1); 
    
     if($numRows==1)
     {
        $row=mysqli_fetch_assoc($result1);
        $c_id=$row["id"];
        if($pass != $row['password'])
        {
            header('location: index.php?passworderror="true"');
            $_SESSION['loggedin'] = false;
            exit;            
        }  
        else if($pass==$row['password'])
        {
            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION["email"]=$email;
            $_SESSION['customer_id']=$c_id;
            $_SESSION['customer']=true;
            header('location: workerdashboard.php');
        }
     }
     else
     {
        header('location: index.php?emailerror="true"');
        $_SESSION['loggedin'] = false;
        exit;            
     }
}
?>