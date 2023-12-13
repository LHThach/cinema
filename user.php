<?php
include_once 'header.php';
?>

<html>

<head>
	<title>user</title>
	<meta charset="UTF-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
		<!--Latest compiled and minified JavaScript -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-swA9Q11t4o/VRa9RtMazbNJ53Z/EPrzQbhQn8HwN/CmXn5i7WaxEf8xz/5q5MWZn" crossorigin="anonymous"></script>
		<style >
</head>

<style>
	table,
	th,
	td {
		border: 2px;
		color: transparent;
		font-family: monospace;
		font-size: 150%;
		padding: 0.25cm;
	}

	body {
		background-image: url("images/user.jpg");
		background-repeat: no-repeat;
		background-size: cover;
		color: white;
	}

	button {
		display: block;
		margin: 0 auto;
		width: 10%;
		height: 40px;
		border: none;
		background-color: #222;
		font-family: arial;
		font-size: 16px;
		color: #fff;
		cursor: pointer;
	}

	a {
		color: white;
	}
</style>

<head>
	<h1 align="middle" style="font-size: 300%; color:white;"><b>THÔNG TIN TÀI KHOẢN</b></h1>
</head>

<body style="background-color: powderblue; font-family: monospace; margin: 0; padding: 0;">
	<h1> </h1>

	<?php

	$dbServername = "localhost";
	$dbUsername = "root";
	$dbPassword = "password";
	$dbName = "test";

	$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);


	$sql = "select fname,lname,age,phone,email,uname,count from users where id='" . $_SESSION['u_id'] . "' ";
	mysqli_query($conn, $sql) or die('Error user profile');
	$result = mysqli_query($conn, $sql);
	while ($row = mysqli_fetch_assoc($result)) {
		echo '<br><br><table style="margin-left: auto; margin-right:auto; ">
								
								<tr>
									<td><u> <b>First Name</b></u></td>
									<td>' . $row['fname'] . '</td>
								</tr>
								<tr>
									<td><u><b> Last Name</b></u></td>
									<td>' . $row['lname'] . '</td>
								</tr>
								<tr>
									<td><u><b> Age </b></u></td>
									<td>' . $row['age'] . '</td>
								</tr>
								<tr>
									<td><u><b> Phone</b> </u></td>
									<td>' . $row['phone'] . '</td>
								</tr>
								<tr>
									<td><u><b>Email</b> </u></td>
									<td>' . $row['email'] . '</td>
								</tr>
								<tr>
									<td><u><b>User Name </b></u></td>
									<td>' . $row['uname'] . '</td>
								</tr>
								<tr>
									<td><u><b>Total bookings</b> </b></u></td>
									<td><a href="userbooking.php">' . $row['count'] . '</a></td>
								</tr>
						</table><br><br>';
	}
	echo '<center><a style="font-size: 250%; font-family: monospace;"  href="details.php">Change Details <span class="glyphicon glyphicon-pencil"></span> </a></center>';


	?>
</body>

</html>
<?php
include_once 'footer.php';
?>