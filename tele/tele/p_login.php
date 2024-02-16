<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="ulogin.css">
</head>
<body>

<?php

  $conn = mysqli_connect("localhost", "root", "", "med");
  
  // Check connection
  if($conn === false){
    die("ERROR: Could not connect. "
      . mysqli_connect_error());
  }
  
  // Taking all 5 values from the form data(input)
  $name = $pass = "";
	$shop_name = $uname = $uemail = $uusername = $upassword=$address=$license="";


if (!empty($_POST['submit_login'])){
   // login related check
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = test_input($_POST["name"]);
	$pass = test_input($_POST["pass"]);
	}

  if(!empty($name)&&(!empty($pass))){
    $sql="SELECT * FROM pharmacy_owner where username='$name' and password='$pass'";
    $result = mysqli_query($conn,$sql);
    $row  = mysqli_fetch_array($result);
    if(is_array($row))
    {
        $_SESSION["uname"]=$row['uname']; 
        header("Location: pharmacy.php"); 
    }
  }
} 
if (!empty($_POST['submit_registration'])) {
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$uname = test_input($_POST["uname"]);
  $uemail = test_input($_POST["uemail"]);
  $shop_name = test_input($_POST["shop_name"]);
  $address = test_input($_POST["address"]);
  $license = test_input($_POST["license"]);
	$uusername = test_input($_POST["uusername"]);
  $upassword = test_input($_POST["upassword"]);
	}
	 if(!empty($uname)&&!empty($uemail)&&!empty($uusername)&&!empty($upassword)&&!empty($license)){
		$sql = "INSERT INTO pharmacy_owner VALUES ('$shop_name','$uname','$uemail','$address','$uusername','$upassword','$license')";
		if(mysqli_query($conn, $sql)){
		echo "<h4 class='reg-mes'>Registration successful!</h4>";
		}
	}else if(!empty($uname)||!empty($uemail)||!empty($uusername)||!empty($upassword)||!empty($license)){
	echo "<h4 class='reg-mes'>All field must be filled!</h4>";
	}
   // registration related check
	
} 

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
  
  // Performing insert query execution
  // here our table name is college


 


//   $sql = "INSERT INTO ureg VALUES ('$uname','$uemail','$uphone','$uusername','$upassword')";
  
//   if(mysqli_query($conn, $sql)){
//     echo "<h3 class='success'>Registration successful!</h3>";

//   } else{
//    echo "ERROR: Hush! Sorry $sql. "
//      . mysqli_error($conn);
//   }
		
//Close connection
mysqli_close($conn);
?>

<!--Header / Navbar section-->
<header>
	<div class="main-menu">
		<ul>
		  <li><a href="home.php">Home</a></li>
		  <li><a href="admin.php">Admin</a></li>
		  <li><a href="Pharmacy.php">Pharmacy Owner</a></li>
		  <li><a href="ulogin.php">User</a></li>
		</ul>
	</div>
</header>

<!--Overlay-->
<div class="big-text"></div>

<div class="txt">
	<div class="reg-wrapper">
		<div class="reg-type">
			<button type="button" id = "loginbtn">Login</button>
      <button type = "button" id="registerbtn">Register</button>

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


		<div id = "user-reg-id" class="user-reg">
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <label> Name </label>
          <input type="text" name="uname">

          <label> E-mail </label>
          <input type="email" name="uemail">

          <label> Shop Name </label>
          <input type="text" name="shop_name">

          <label> Address </label>
          <input type="text" name="address">

          <label> Username</label>
          <input type="text" name="uusername">
          
          <label>Password </label>
          <input type="password" name = "upassword">

          <label> Shop License </label>
          <input type="text" name="license">

          <a href="ulogin.php"> 
          <input type="submit" name="submit_registration" value="Register">  
          </a>
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