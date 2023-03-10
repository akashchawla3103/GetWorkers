<?php

if (isset($_POST["submit"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["Subject"];
    $message = $_POST["message"];

    // echo  $name, $email,$subject,$message;

    $conn = new mysqli("localhost", "root", "", "worker_info");
    if ($conn->connect_error) {
        die("Connection Failed" . $conn->connect_error);
    }
    $sql = "INSERT INTO contactus (`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')";
    $result = $conn->query($sql);

    if ($result) {

        header('location:index.php?formfilled="true"');
    } else {
        //  header('location:index.php?update="false"');
        echo "Failed";
    }
}
?>