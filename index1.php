<?php

session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Trang Chủ</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <!--Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-swA9Q11t4o/VRa9RtMazbNJ53Z/EPrzQbhQn8HwN/CmXn5i7WaxEf8xz/5q5MWZn" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


    <style>
        .prodct-film {
            text-align: center;
        }

        .product-caption {
            text-align: center;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .product-button {
            text-align: center;
        }

        /* Để làm đẹp button */
        .product-button button {}
    </style>
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
                                <a class="btn btn-primary" href="login.php" style="font-size: 100%; margin-left: 0.25rem; width:auto; height:2.5rem"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Đăng nhập</a>
                                <a class="btn btn-primary" href="signup.php" style="font-size: 100%; margin-left: 0.25rem; width:auto; height:2.5rem"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Đăng ký</a>
                                </form>
                            </li>
                        </ul>';
                    }
                    ?>
                </div>
            </div>
        </nav>
    </header>


    <!-- JavaScript và jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <section class="main-container">
        <div class="main-wrapper">

            <?php
            if (isset($_SESSION['success1'])) {
                echo '<p align=middle><br><br><br>' . $_SESSION['success1'] . '</p>';
                unset($_SESSION['success1']);
            } else {
                if (isset($_SESSION['u_id'])) {
                    echo "<p align=center><br><b>You are still Logged in. <BR> Log out to Continue.</b></p> ";
                }

                if (isset($_SESSION['errors'])) {
                    echo '<p align=middle> Invalid username or password.<br> Please try again.</b></p>';
                    unset($_SESSION['errors']);
                }
            }

            ?>
        </div>
    </section>


    <div class="background" style="background: url('images/cinema2.jpg') top center / cover no-repeat; height: 115vh;"></div>
    <div style="background-color: #9fd1fa; color: white;">
        <?php
        echo '<h1 align="middle"><br><b>Phim đang hot! ' . $_SESSION['u_first'] . '!</b></h1><br><br>';
        ?>

        <p style="background-color: transparent;">
            <center>
                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="gangs.php">
                                <img src="images/onepiece.jpg" alt="One Piece" style="width: 50%; height: 50%;">
                            </a>
                        </div>

                        <div class="carousel-item">
                            <a href="gangs.php">
                                <img src="images/anime.jpg" alt="One Piece" style="width: 50%; height: 50%;">
                            </a>
                            <!-- <div class="carousel-caption"><h5><a href="gangs.php" style="color:#fff; text-decoration: none;">One Piece 1</a></h5></div> -->
                        </div>

                        <div class="carousel-item">
                            <a href="gangs.php">
                                <img src="images/anime2.jpg" alt="One Piece" style="width: 50%; height: 50%;">
                            </a>
                            <!-- <div class="carousel-caption"><h5><a href="gangs.php" style="color:#fff; text-decoration: none;">One Piece 1</a></h5></div> -->
                        </div>

                        <div class="carousel-item">
                            <a href="gangs.php">
                                <img src="images/anime3.jpg" alt="One Piece" style="width: 50%; height: 50%;">
                            </a>
                            <!-- <div class="carousel-caption"><h5><a href="gangs.php" style="color:#fff; text-decoration: none;">One Piece 1</a></h5></div> -->
                        </div>

                        <div class="carousel-item">
                            <a href="gangs.php">
                                <img src="images/anime4.jpg" alt="One Piece" style="width: 50%; height: 50%;">
                            </a>
                            <!-- <div class="carousel-caption"><h5><a href="gangs.php" style="color:#fff; text-decoration: none;">One Piece 1</a></h5></div> -->
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </center>
        </p>
        <br><br><br>
        <h2 style="text-align: center; font-family: monospace; font-size: 250%; padding-left: 0.5cm;"><br><b>Những phim sẽ chiếu trong tuần này:</b></h2>
        <br><br><br>

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <!-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button> -->
                <!-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button> -->
                <!-- Thêm các indicators tương ứng với số lượng phim -->
            </div>
            <div class="carousel-inner">
                <div class="js_list" style="text-align: center; font-size: 150%; display: flex; justify-content: center;">
                    <span class="js__tab" data-target="#film-1" style="margin-right: 10px;">PHIM ĐANG CHIẾU</span>
                    <span class="js__tab" data-target="#film-1" style="margin-right: 10px;">PHIM SẮP CHIẾU</span>
                    <span class="js__tab" data-target="#film-1" style="margin-right: 10px;">VÉ BÁN TRƯỚC</span>
                </div>
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <ul style="list-style-type: none;">
                                <li class="product-view"></li>
                                <li class="prodct-film"><img src="images/phim1.jpg" alt="Film Poster" width="200" height="300"></li>
                                <li class="product-caption"> Thiếu Niên Và Chim Diệc</li>
                                <li class="product-button"><button type="submit" name="submit" class="btn btn-primary" style="width:auto; height:2.5rem; background-color:green;">Mua vé</button></li>
                            </ul>
                        </div>
                        <div class="carousel-item">
                            <ul style="list-style-type: none;">
                                <li class="product-view"></li>
                                <li class="prodct-film"><img src="images/phim2.jpg" alt="Film Poster" width="200" height="300"></li>
                                <li class="product-caption"> Thiếu Niên Và Chim Diệc</li>
                                <li class="product-button"><button type="submit" name="submit" class="btn btn-primary" style="width:auto; height:2.5rem; background-color:green;">Mua vé</button></li>
                            </ul>
                        </div>
                        <div class="carousel-item">
                            <ul style="list-style-type: none;">
                                <li class="product-view"></li>
                                <li class="prodct-film"><img src="images/phim3.jpg" alt="Film Poster" width="200" height="300"></li>
                                <li class="product-caption"> Thiếu Niên Và Chim Diệc</li>
                                <li class="product-button"><button type="submit" name="submit" class="btn btn-primary" style="width:auto; height:2.5rem; background-color:green;">Mua vé</button></li>
                            </ul>
                        </div>
                        <div class="carousel-item">
                            <ul style="list-style-type: none;">
                                <li class="product-view"></li>
                                <li class="prodct-film"><img src="images/phim4.jpg" alt="Film Poster" width="200" height="300"></li>
                                <li class="product-caption"> Thiếu Niên Và Chim Diệc</li>
                                <li class="product-button"><button type="submit" name="submit" class="btn btn-primary" style="width:auto; height:2.5rem; background-color:green;">Mua vé</button></li>
                            </ul>
                        </div>

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

        </div>
        <!-- <p>
        <center><ol style="list-style:none; text-decoration:none;">
            <li><a style="font-family: monospace;" href="gangs.php">One Piece 1</a></li>
            <li><a style="font-family: monospace;" href="neram.php">One Piece 2</a></li>
			<li><a style="font-family: monospace;" href="neram.php">One Piece 3</a></li>
			<li><a style="font-family: monospace;" href="neram.php">One Piece 4</a></li>
			<li><a style="font-family: monospace;" href="neram.php">One Piece 5</a></li>
        </ol>
		</center>
    </p> -->

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.9229048098523!2d105.80550057476837!3d20.995727288913272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135add3018563bb%3A0x70bf956e9956d3f0!2zMzM0IMSQLiBOZ3V54buFbiBUcsOjaSwgVGhhbmggWHXDom4gVHJ1bmcsIFRoYW5oIFh1w6JuLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1702596509754!5m2!1svi!2s" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </div>

    <script>
        $(document).ready(function() {
            $('#myCarousel').carousel({
                interval: 2000 // Đặt thời gian chuyển đổi slide (ở đây là 2 giây)
            });
        });
    </script>
</body>

<?php
include_once 'footer.php';
?>