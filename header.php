<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Movie Database</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
	<!--Latest compiled and minified JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-swA9Q11t4o/VRa9RtMazbNJ53Z/EPrzQbhQn8HwN/CmXn5i7WaxEf8xz/5q5MWZn" crossorigin="anonymous"></script>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-black">
        <div class="container-fluid">
        <a class="navbar-brand" href="index1.php">
                <div class="d-flex align-items-center">
                    <img src="images/logo.jpg" alt="Logo" width="40" height="40" style="margin-right: 8px;">
                    <span style="font-weight: bold; color: #4DA6FF;">WEEABO CINEMA</span>
                </div>
            </a>

            <?php
            if (isset($_SESSION['u_id'])) {
                echo '<a class="navbar-brand" href="second.php">Home</a>';
            }
            ?>

            <div class="collapse navbar-collapse" id="navbarNav">
                <?php
                if (isset($_SESSION['u_id'])) {
                    echo '<ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="user.php"><span class="glyphicon glyphicon-user"></span>&nbspProfile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="includes/logout.inc.php"><span class="glyphicon glyphicon-log-in"></span>&nbspLogout</a>
                            </li>
                          </ul>';
                } else {
                    echo '<ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                              <form action="includes/login.inc.php" class="d-flex" method="POST">
                                <input type="text" class="form-control me-2" name="uid" placeholder="Tên đăng nhập/e-mail">
                                <input type="password" name="pwd" class="form-control me-2" placeholder="Mật khẩu">
                                <button type="submit" name="submit" class="btn btn-primary" style= "width:16rem; height:2.5rem">Đăng nhập</button>
                                <a class="btn btn-primary" href="signup.php" style="font-size: 100%; margin-left: 0.25rem; width:16rem; height:2.5rem"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Đăng ký</a>
                        </form>
                            </li>
                        </ul>';
                }
                ?>
            </div>
        </div>
    </nav>
</header>
</body>