<?php
	include_once 'header.php';
?>

 <!-- JavaScript và jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

<style >
	p    {font-family: monospace; font-size: 300%; color:  yellow;}
</style>

<section class="main-container" >
	<div class="main-wrapper">
		
		<?php
			if(isset($_SESSION['success1'])) 
			{
				echo '<p align=middle><br><br><br>'.$_SESSION['success1'].'</p>';
				unset($_SESSION['success1']);
			}
			else
			{
				if (isset($_SESSION['u_id'])) {
					echo "<p align=center><br><b>You are still Logged in. <BR> Log out to Continue.</b></p> ";
				}

				if(isset($_SESSION['errors'])) 
				{
					echo '<p align=middle> Invalid username or password.<br> Please try again.</b></p>';
					unset($_SESSION['errors']);
				}
			}
				
		?>
	</div>
</section>

<body>
<div class="background" style="background: url('images/cinema2.jpg') top center / cover fixed no-repeat; height: 115vh;"></div>
<div style="background-color: powderblue; color: white;">
    <?php
    echo '<h1 align="middle"><br><b>Danh sách phim ' . $_SESSION['u_first'] . '!</b></h1><br><br>';
    ?>
    <p style="background-color: transparent;">
        <center>
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/onepiece.jpg." alt="One Piece" style="width: 50%; height: 50%;">
                    </div>
                    <div class="carousel-item">
                        <img src="images/anime.jpg" alt="Neram" style="width: 50%; height: 50%;">
                    </div>
					<div class="carousel-item">
                        <img src="images/anime2.jpg" alt="Neram" style="width: 50%; height: 50%;">
                    </div>
					<div class="carousel-item">
                        <img src="images/anime3.jpg" alt="Neram" style="width: 50%; height: 50%;">
                    </div>
					<div class="carousel-item">
                        <img src="images/anime4.jpg" alt="Neram" style="width: 50%; height: 50%;">
                    </div>
                    <!-- Thêm các slide phim khác tương tự ở đây -->
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
    <h2 style="text-align: center; font-family: monospace; font-size: 300%; padding-left: 0.5cm;"><br><b>Những phim sẽ chiếu trong tuần này:</b></h2>
    <br><br><br>
    <p>
        <center><ol style="list-style:none; text-decoration:none;">
            <li><a style="font-family: monospace;" href="gangs.php">One Piece 1</a></li>
            <li><a style="font-family: monospace;" href="neram.php">One Piece 2</a></li>
			<li><a style="font-family: monospace;" href="neram.php">One Piece 3</a></li>
			<li><a style="font-family: monospace;" href="neram.php">One Piece 4</a></li>
			<li><a style="font-family: monospace;" href="neram.php">One Piece 5</a></li>
        </ol>
		</center>
    </p>
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