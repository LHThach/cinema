<?php
include_once 'header.php';
?>

<html>

<head>
	<title>Signup</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
	<!--Latest compiled and minified JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-swA9Q11t4o/VRa9RtMazbNJ53Z/EPrzQbhQn8HwN/CmXn5i7WaxEf8xz/5q5MWZn" crossorigin="anonymous"></script>
</head>
	<style>
		input:valid {
			border: 1px solid black;
		}

		body>p {
			font-family: monospace;
			font-size: 250%;
			font-weight: normal;
			color: white;
			font-style: bold;
			justify-content: space-between;
		}

		body {
			background-image: url("images/sign2.jpg");
			-moz-background-size: cover;
			-webkit-background-size: cover;
			background-size: 100% 110vh;
			background-position: top center !important;
			background-repeat: no-repeat !important;
			background-attachment: fixed;
		}
	</style>

	<center>
		<form style="padding-top: 0.25%; padding-right:8%; padding-left:65%;  padding-bottom: 1%;" class="form-group" action="includes/signup.inc.php" method="POST">
			<div>
				<h3 style="font-family:monospace; font-size:200%; font-weight:normal; padding-top: 0.25%; padding-bottom: 1%; color: white;"><b>Bạn không có tài khoản?</b></h3>
				<h2 style="font-family:monospace; font-size:250%; font-weight:normal; padding-top: 0.5%; color: white; "><b>Đăng ký ngay!</b></h2><br>
				<input type="text" name="first" class="form-control" placeholder="Họ"><br>
				<input type="text" name="last" class="form-control" placeholder="Tên"><br>
				<input type="number" name="age" class="form-control" placeholder="Tuổi" min="16"><br>
				<input type="text" name="email" class="form-control" placeholder="Email"><br>
				<input type="text" name="phone" class="form-control" placeholder="Số điện thoại"><br>
				<input type="text" name="uid" class="form-control" placeholder="Tên Tài khoản"><br>
				<input type="password" name="pwd" class="form-control" placeholder="Mật khẩu "><br>
				<br>


				<button style="display:inline-block; color:white;" class="btn btn-primary btn-lg" type="reset" value="Reset">Nhập lại</button>&nbsp;&nbsp;&nbsp;&nbsp;
				<button style="display:inline-block;  color:white;" class="btn btn-primary btn-lg" type="submit" name="submit">Đăng ký</button>
			</div>

			</style>


<body style=" color:white;">

	<?php
	if (isset($_SESSION['emptys'])) {
		echo '<p align=middle>' . $_SESSION['emptys'] . '</p>';
		unset($_SESSION['emptys']);
	} elseif (isset($_SESSION['invalid'])) {
		echo '<p align=middle>' . $_SESSION['invalid'] . '</p>';
		unset($_SESSION['invalid']);
	} elseif (isset($_SESSION['usertaken'])) {
		echo '<p align=middle>' . $_SESSION['usertaken'] . '</p>';
		unset($_SESSION['usertaken']);
	} elseif (isset($_SESSION['success'])) {
		echo '<p align=middle>' . $_SESSION['success'] . '</p>';
		unset($_SESSION['success']);
	} elseif (isset($_SESSION['age'])) {
		echo '<p align=middle>' . $_SESSION['age'] . '</p>';
		unset($_SESSION['age']);
	} elseif (isset($_SESSION['phone'])) {
		echo '<p align=middle>' . $_SESSION['phone'] . '</p>';
		unset($_SESSION['phone']);
	}
	session_destroy();
	?>

</body>