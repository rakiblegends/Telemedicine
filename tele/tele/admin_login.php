<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="admin_login.css">
</head>
<body>

<?php
	
$name = $pass ="";

if (!empty($_POST['submit_login'])){
   // login related check
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = test_input($_POST["name"]);
		$pass = test_input($_POST["pass"]);
	}

  if($name = "admin" && $pass="admin"){
      $_SESSION["name"]=$row['name']; 
      header("Location: admin.php"); 
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<!--Header / Navbar section-->
<header>
	<div class="main-menu">
		<ul>
		  <li><a href="home.php">Home</a></li>
		  <li><a href="admin.html">Admin</a></li>
		  <li><a href="p_login.php">Pharmacy Owner</a></li>
		  <li><a href="ulogin.php">User</a></li>
		</ul>
	</div>
</header>

<!--Overlay-->
<div class="big-text"></div>

<div class="txt">
	<div class="reg-wrapper">
		<div class="reg-type">
			<button type="button" id = "loginbtn">Login as Admin</button>

		</div>
		<div id = "user-login-id" class="user-reg">
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				  <label for="name"> Username</label>
				  <input type="text" name="name">
				  
				  <label for="pass">Password </label>
				  <input type="password" name = "pass">

				  <input type="submit" name="submit_login" value="Login">
			</form>
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

<script src = "script.js"></script>
</body>
</html>