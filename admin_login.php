<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="admin css/styleadmin.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>


<body>
  <?php
  if (isset($_GET['passworderr'])) {
  ?>
    <script>
      Swal.fire(
        'Failed!',
        'Enter Valid Password!',
        'error'
      )
    </script>
  <?php
  }

  if (isset($_GET['emailerr'])) {
  ?>
    <script>
      Swal.fire(
        'Failed!',
        'Invalid Email!',
        'error'
      )
    </script>
  <?php
  }
  ?>
  <div class="container" style="background-color: #f69769;">

    <div class="col-md-6 ">
      <form class="myform" action="alogin.php" method="post">


        <div class="image">
          <img src="images/3.png" alt="Avatar" class="avatar">
        </div>

        <h1 class="admin">Admin</h1>

        <input type="email" class="input-field" name="admin_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Email" required>

      

        <input type="password" class="input-field" name="admin_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password" required>


        <div class="bt">
          <button type="submit" class="submit-btn">Login</button>
        </div>
      </form>
    </div>


    <div class="col-md-6">
      <img class="ad_pic" src="images/ad.png" alt="">
    </div>
  </div>




</body>

</html>