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
	$shop_name = $med = $prc = $loc = $rate=$stck="";


if (!empty($_POST['submit_registration'])) {
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$shop_name = test_input($_POST["shop_name"]);
  $med = test_input($_POST["med"]);
  $prc = test_input($_POST["prc"]);
  $loc = test_input($_POST["loc"]);
  $rate = test_input($_POST["rate"]);
	$stck = test_input($_POST["stck"]);
	}
	 if(!empty($shop_name)&&!empty($med)&&!empty($prc)&&!empty($loc)&&!empty($stck)){
		$sql = "INSERT INTO medicines VALUES ('$shop_name','$med','$prc','$loc','$rate','$stck')";
		if(mysqli_query($conn, $sql)){
		echo "<h4 class='reg-mes'>Medicine has been added to the inventory.</h4>";
		}
	}else if(!empty($shop_name)||!empty($med)||!empty($prc)||!empty($loc)||!empty($stck)){
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
      <button type = "button" id="registerbtn">Add Medicine</button>

		</div>

		<div id = "user-login-id" class="user-reg">
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <label> Shop Name </label>
          <input type="text" name="shop_name">

          <label> Medicine Name </label>
          <input type="text" name="med">

          <label> Price </label>
          <input type="text" name="prc">

          <label> Location </label>
          <input type="text" name="loc">

          <label> Rating </label>
          <input type="text" name="rate">
          
          <label> Stock </label>
          <input type="text" name = "stck">

          <a href="ulogin.php"> 
          <input type="submit" name="submit_registration" value="ADD">  
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