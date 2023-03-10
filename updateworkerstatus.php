<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    $_SESSION['loggedin'] = true;
    $w_id="";
    $w_id =$_SESSION['worker_id'];
    $conn = new mysqli("localhost", "root", "", "worker_info");

    if ($conn->connect_error) {
        die("Connection Failed" . $conn->connect_error);
    } else {
        echo "sucess conn";
    }
    echo "connection established";

    $sql1 = "UPDATE worker1 SET  `availability` = 1 WHERE id =$w_id";
    $result1 = $conn->query($sql1);
    if ($result1) {
        header("location: clients.php?update=true");
    }



    ?>
</body>

</html>