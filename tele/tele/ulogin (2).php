<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="ulogin.css">
</head>
<body>



<!--Header / Navbar section-->
<header>
	<div class="main-menu">
		<ul>
		  <li><a href="home.php">Home</a></li>
		  <li><a href="admin.html">Admin</a></li>
		  <li><a href="Pharmacy.html">Pharmacy Owner</a></li>
		  <li><a href="User.html">User</a></li>
		</ul>
	</div>
</header>

<!--Overlay-->
<div class="big-text"></div>

<div class="txt">
	<div class="reg-wrapper">
		<div class="reg-type">
			<h4>Register As</h4>
			<button type="button" id="adminbtn">Admin</button>
			<button type="button" id = "pharmacybtn">Pharmacy Owner</button>
			<button type = "button" id="userbtn">User</button>
		</div>
		<div id = "user-reg-id" class="user-reg">
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				  <label> Username</label>
				  <input type="text" name="uusername">
				  
				  <label>Password </label>
				  <input type="password" name = "upassword">

				  <a href="ulogin.php"> 
				  <input type="submit" name="submit" value="Register">  
				  </a>
			</form>
		</div>m>
		</div>
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