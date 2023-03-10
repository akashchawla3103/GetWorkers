<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="admin css/styleadmindashboard.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  <title>Admin Dashboard</title>
</head>

<body>
  <?php
  session_start();
  //Update Message
  echo'<div class="updatemessage">';
  // if (isset($_GET['update'])) {
  //   echo '<div class="alert alert-warning" role="alert">
  //     Information Updated 
  //     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  //     <span aria-hidden="true">&times;</span>
  //     </button>
  //   </div>';
  // }
  if (isset($_GET['update'])) {
    ?>
    <script>
      

        Swal.fire(
          'Done!',
          'Information Updated Sucessfully!',
          'success'
        )
    </script>
  <?php
  }
  
  if (isset($_GET['updatefail'])) {
    ?>
    <script>
      

        Swal.fire(
          'Failed!',
          'Updation Fail!',
          'error'
        )
    </script>
  <?php
  }
  
  echo'</div>';


  if (isset($_SESSION['loggedin'])) {
    echo '<body style="background-color: white;">
  <div class="nav-item" style="float: right; padding-top: 55px; padding-right: 10px;">
    <a class="nav-item btn btn-outline-danger" href="logout.php" role="button" style="color: white; background-color: #ff7c4d; "> Log out</a>
  </div>
  <img src="images/3.png" alt="" width="15%" style="margin-left: 650px;">';
    $conn = new mysqli("localhost", "root", "", "worker_info");

    if ($conn->connect_error) {
      die("Connection Failed" . $conn->connect_error);
    }

    echo '<div class="title">
    <h6 class="display-6" >Workers list</h6>
    </div>';

    echo '<table class="table table-hover">
  <thead>
  <tr>
  <th scope="col">Name</th>
  <th scope="col">Mobile No</th>
  <th scope="col">Birth Date</th>
  <th scope="col">Gender</th>
  <th scope="col">Address</th>
  <th scope="col">Id</th>
  <th scope="col">Work </th>
  <th scope="col">Experience</th>
  <th scope="col">Edit</th>
  <th scope="col">Delete</th>
  </tr>
  </thead>
  <tbody>';

    $sql = 'SELECT * FROM `worker1`';
    $result1 = $conn->query($sql);
    $numRows = mysqli_num_rows($result1);

    if ($result1->num_rows > 0) {
      echo "$numRows results";
      while ($row = $result1->fetch_assoc()) {
        echo "<tr>";
        $aemail = $row['email'];
        // echo $aemail;
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['mobile'] . "</td>";
        echo "<td>" . $row['birthdate'] . "</td>";
        echo "<td>" . $row['gender'] . "</td>";
        echo "<td>" . $row['address'] . "</td>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['work'] . "</td>";
        echo "<td>" . $row['experience'] . "</td>";
        echo "<td>"
  ?>
        <form action="admin_action.php" method="POST">
          <input type="hidden" name="uemail" value="<?php echo $aemail ?>">
          <button class="nav-item btn btn-success" type="submit" name="Edit"> Edit</button>
        </form>
        </td>
        <?php echo "<td>" ?>

        <form action="admin_action.php" method="POST">
          <input type="hidden" name="demail" value="<?php echo $aemail ?>">
          <button class="nav-item btn btn-danger" type="submit" name="Delete"> Delete</button>
        </form>
        </td>
        </tr>



  <?php
      }
    } else {
      echo "0 results";
    }
  }
  ?>
</body>

</html>