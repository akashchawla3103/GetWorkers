<?php



if($_SERVER["REQUEST_METHOD"]=="POST")
{
     $email=$_POST['w_email'];
     $pass=md5($_POST['w_password']);
//    echo $pass;

     $conn=new mysqli("localhost","root","","worker_info");
     if($conn->connect_error)
     {
         die("Connection Failed" . $conn->connect_error);
     
     }
else{
     $sql="Select * from worker1 where (email='$email')";

     $result1=mysqli_query($conn,$sql);
     $numRows=mysqli_num_rows($result1); 
    // 
     if($numRows==1)
     {
        $row=mysqli_fetch_assoc($result1);
        $w_id=$row["id"];
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
            // echo $_SESSION["email"];
            $_SESSION['worker']=true;
            $_SESSION['worker_id']=$w_id;
           
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
}
?>