
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="home.css">
</head>
<body>

<?php
$connectQuery = mysqli_connect("localhost", "root", "", "med");

if(mysqli_connect_errno()){
    echo mysqli_connect_error();
    exit();
}
// search

$sql = "SELECT * FROM review";

$msg = "";
$result = mysqli_query($connectQuery,$sql);
	if(mysqli_num_rows($result) > 0){
	}else{
	    $msg = "No Review found";
	}

?>

<!--Header / Navbar section-->
<header>
	<div class="main-menu">
		<ul>
		  <li><a href="home.php">Home</a></li>
		  <li><a href="admin_login.php">Admin</a></li>
		  <li><a href="Pharmacy.html">Pharmacy Owner</a></li>
		  <li><a href="ulogin.php">User</a></li>
		</ul>
	</div>
</header>

<!--Overlay-->
<div class="big-text"></div>

<div class="txt">
	<div class="review-row">

			<?php
				echo $msg;
                while($row = mysqli_fetch_assoc($result)){
             ?>
			<div class="single-review">
				
				<h3 class="product-tile"><?php echo $row['medicine'];?></h3>
				<sapn class="rating"><?php echo $row['rating'];?></sapn> <img class="rating_img" src="img/rating.png"/>

				<p><?php echo $row['description'];?></p>
			</div>
			<?php } ?>
		</div>
</div>

<footer>
	<div class="foot">
		<div class="foot-about foot-child">
			<h3>About</h3>
			<p> A cutting-edge online parmacey web application designed to revolutionize healthcare access and bring quality medical services directly to your fingertips. We seek to bridge the gap between patients and healthcare providers, breaking down geographical barriers and facilitating healthcare access for all. Whether you're facing a minor ailment or seeking expert advice. This is the place that brings healthcare to you, providing reliable, efficient, and compassionate medical services at your doorstep.</p>
		</div>
		<div class="foot-child contact-us">
			<h3>Contact Us</h3>
			<a href="#">Call: 014XX-XXXXXX </a>
			<br>
			<a href="#">Email: abc@gmail.com</a>
			<br>
			<a href="#">Address: DUET, Gazipur</a>
		</div>
	</div>
</footer>
<!-- <script src = "script.js"></script> -->
</body>
</html>