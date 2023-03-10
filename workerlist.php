 <!DOCTYPE html>
 <html>

 <head>
 	<title>Electrican List</title>
 	<link rel="stylesheet" type="text/css" href="stylesidebar.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
 </head>

 <body>

 	<div id="main">
 		<?php

			session_start();
			require_once "electriciansidebar.php";
			if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
				if (isset($_POST["Electrician"])) {

					echo '<h6 class="display-6  text-center" style="color: black">Electrician list</h6>';


					echo '<table class="table table-hover">
					<thead>
					<tr>
					<th scope="col">First</th>
					<th scope="col">Email</th>
					<th scope="col">Gender</th>
					<th scope="col">Work Experience</th>
					<th scope="col">Availability</th>
					</tr>
					</thead>
					<tbody>';

					$conn = new mysqli("localhost", "root", "", "worker_info");
					if ($conn->connect_error) {
						die("Connection Failed" . $conn->connect_error);
					}
					$sql = "Select * from worker1 where work='Electrican' and availability=1";
					$result1 = mysqli_query($conn, $sql);
					$numRows = mysqli_num_rows($result1);

					if ($result1->num_rows > 0) {
						echo "$numRows results";

						while ($row = $result1->fetch_assoc()) {
							
								echo "<tr>";
								$booking_id = $row['id'];
								echo $booking_id;
								echo "<td>" . $row['name'] . "</td>";
								echo "<td>" . $row['email'] . "</td>";
								echo "<td>" . $row['gender'] . "</td>";
								echo "<td>" . $row['experience'] . "</td>";
								echo "<td>";

								if ($row['availability'] == 1) {
			?>
 							<form action="bookdetails.php" method="POST">
 								<input type="hidden" name="book_id" value=" <?php echo $booking_id ?>">
 								<button type="submit" class="btn btn-primary" name="view">Book Now</button>
 							</form>
 							</td>
 							</tr>

 						<?php
							}
						}
					} else {
						echo "0 results";
					}
					echo '</tbody>
					   </table>';

					$conn->close();
				}

				if (isset($_POST["Carpenter"])) {
					echo '<h6 class="display-6  text-center" style=" color: black">Carpenter list</h6><br>';


					echo '<table class="table table-hover">
					<thead>
					<tr>
					<th scope="col">First</th>
					<th scope="col">Email</th>
					<th scope="col">Gender</th>
					<th scope="col">Work Experience</th>
					<th scope="col">Availability</th>
					</tr>
					</thead>
					<tbody>';

					$conn = new mysqli("localhost", "root", "", "worker_info");
					if ($conn->connect_error) {
						die("Connection Failed" . $conn->connect_error);
					}
					$sql = "Select * from worker1 where work='Carpenter' and availability=1";
					$result1 = mysqli_query($conn, $sql);
					$numRows = mysqli_num_rows($result1);

					if ($result1->num_rows > 0) {
						echo "$numRows results";

						while ($row = $result1->fetch_assoc()) {
							echo "<tr>";
							$booking_id = $row['id'];
							echo $booking_id;
							echo "<td>" . $row['name'] . "</td>";
							echo "<td>" . $row['email'] . "</td>";
							echo "<td>" . $row['gender'] . "</td>";
							echo "<td>" . $row['experience'] . "</td>";
							echo "<td>";

							if ($row['availability'] == 1) {
							?>
 							<form action="bookdetails.php" method="POST">
 								<input type="hidden" name="book_id" value=" <?php echo $booking_id ?>">
 								<button type="submit" class="btn btn-primary" name="view">Book Now</button>
 							</form>
 							</td>
 							</tr>

 			<?php
							}
						}
					} else {
						echo "0 results";
					}
					echo '</tbody>
					   </table>';

					$conn->close();
				}
				?>

 			<?php if (isset($_POST["Plumber"])) {
					echo '<h6 class="display-6 text-center" style=" color: black;" >Plumber list</h6><br>';
					echo '<table class="table table-hover">
					<thead>
					<tr>
					<th scope="col">First</th>
					<th scope="col">Email</th>
					<th scope="col">Gender</th>
					<th scope="col">Work Experience</th>
					<th scope="col">Availability</th>
					</tr>
					</thead>
					<tbody>';

					$conn = new mysqli("localhost", "root", "", "worker_info");
					if ($conn->connect_error) {
						die("Connection Failed" . $conn->connect_error);
					}
					$sql = "Select * from worker1 where work='Plumber' and availability=1";
					$result1 = mysqli_query($conn, $sql);
					$numRows = mysqli_num_rows($result1);

					if ($result1->num_rows > 0) {
						echo "$numRows results";

						while ($row = $result1->fetch_assoc()) {
							echo "<tr>";
							$booking_id = $row['id'];
							echo $booking_id;
							echo "<td>" . $row['name'] . "</td>";
							echo "<td>" . $row['email'] . "</td>";
							echo "<td>" . $row['gender'] . "</td>";
							echo "<td>" . $row['experience'] . "</td>";
							echo "<td>";

							if ($row['availability'] == 1) {
				?>
 							<form action="bookdetails.php" method="POST">
 								<input type="hidden" name="book_id" value=" <?php echo $booking_id ?>">
 								<button type="submit" class="btn btn-primary" name="view">Book Now</button>
 							</form>
 							</td>
 							</tr>

 						<?php
							}
						}
					} else {
						echo "0 results";
					}
					echo '</tbody>
					   </table>';

					$conn->close();
				}

				if (isset($_POST["Cleaner"])) {
					echo '<h6 class="display-6  text-center" style="color: black">Cleaner list</h6><br>';
					echo '<table class="table table-hover">
					<thead>
					<tr>
					<th scope="col">First</th>
					<th scope="col">Email</th>
					<th scope="col">Gender</th>
					<th scope="col">Work Experience</th>
					<th scope="col">Availability</th>
					</tr>
					</thead>
					<tbody>';

					$conn = new mysqli("localhost", "root", "", "worker_info");
					if ($conn->connect_error) {
						die("Connection Failed" . $conn->connect_error);
					}
					$sql = "Select * from worker1 where work='Cleaner' and availability=1";
					$result1 = mysqli_query($conn, $sql);
					$numRows = mysqli_num_rows($result1);

					if ($result1->num_rows > 0) {
						echo "$numRows results";

						while ($row = $result1->fetch_assoc()) {
							echo "<tr>";
							$booking_id = $row['id'];
							echo $booking_id;
							echo "<td>" . $row['name'] . "</td>";
							echo "<td>" . $row['email'] . "</td>";
							echo "<td>" . $row['gender'] . "</td>";
							echo "<td>" . $row['experience'] . "</td>";
							echo "<td>";

							if ($row['availability'] == 1) {
							?>
 							<form action="bookdetails.php" method="POST">
 								<input type="hidden" name="book_id" value=" <?php echo $booking_id ?>">
 								<button type="submit" class="btn btn-primary" name="view">Book Now</button>
 							</form>
 							</td>
 							</tr>

 						<?php
							}
						}
					} else {
						echo "0 results";
					}
					echo '</tbody>
					   </table>';

					$conn->close();
				}

				if (isset($_POST["Garderner"])) {
					echo '<h6 class="display-6  text-center" style=" color: black">Garderner list</h6><br>';

					echo '<table class="table table-hover">
					<thead>
					<tr>
					<th scope="col">First</th>
					<th scope="col">Email</th>
					<th scope="col">Gender</th>
					<th scope="col">Work Experience</th>
					<th scope="col">Availability</th>
					</tr>
					</thead>
					<tbody>';

					$conn = new mysqli("localhost", "root", "", "worker_info");
					if ($conn->connect_error) {
						die("Connection Failed" . $conn->connect_error);
					}
					$sql = "Select * from worker1 where work='Garderner' and availability=1";
					$result1 = mysqli_query($conn, $sql);
					$numRows = mysqli_num_rows($result1);

					if ($result1->num_rows > 0) {
						echo "$numRows results";

						while ($row = $result1->fetch_assoc()) {
							echo "<tr>";
							$booking_id = $row['id'];
							echo $booking_id;
							echo "<td>" . $row['name'] . "</td>";
							echo "<td>" . $row['email'] . "</td>";
							echo "<td>" . $row['gender'] . "</td>";
							echo "<td>" . $row['experience'] . "</td>";
							echo "<td>";

							if ($row['availability'] == 1) {
							?>
 							<form action="bookdetails.php" method="POST">
 								<input type="hidden" name="book_id" value=" <?php echo $booking_id ?>">
 								<button type="submit" class="btn btn-primary" name="view">Book Now</button>
 							</form>
 							</td>
 							</tr>

 						<?php
							}
						}
					} else {
						echo "0 results";
					}
					echo '</tbody>
					   </table>';

					$conn->close();
				}

				if (isset($_POST["Mason"])) {
					echo '<h6 class="display-6  text-center" style=" color: black">Mason list</h6><br>';
					echo '<table class="table table-hover">
					<thead>
					<tr>
					<th scope="col">First</th>
					<th scope="col">Email</th>
					<th scope="col">Gender</th>
					<th scope="col">Work Experience</th>
					<th scope="col">Availability</th>
					</tr>
					</thead>
					<tbody>';

					$conn = new mysqli("localhost", "root", "", "worker_info");
					if ($conn->connect_error) {
						die("Connection Failed" . $conn->connect_error);
					}
					$sql = "Select * from worker1 where work='Mason' and availability=1";
					$result1 = mysqli_query($conn, $sql);
					$numRows = mysqli_num_rows($result1);

					if ($result1->num_rows > 0) {
						echo "$numRows results";

						while ($row = $result1->fetch_assoc()) {
							echo "<tr>";
							$booking_id = $row['id'];
							echo $booking_id;
							echo "<td>" . $row['name'] . "</td>";
							echo "<td>" . $row['email'] . "</td>";
							echo "<td>" . $row['gender'] . "</td>";
							echo "<td>" . $row['experience'] . "</td>";
							echo "<td>";

							if ($row['availability'] == 1) {
							?>
 							<form action="bookdetails.php" method="POST">
 								<input type="hidden" name="book_id" value=" <?php echo $booking_id ?>">
 								<button type="submit" class="btn btn-primary" name="view">Book Now</button>
 							</form>
 							</td>
 							</tr>

 		<?php
							}
						}
					} else {
						echo "0 results";
					}
					echo '</tbody>
					   </table>';

					$conn->close();
				}
			}
			?>
 	</div>

 </body>

 </html>