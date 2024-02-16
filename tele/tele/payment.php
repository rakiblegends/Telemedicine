<?php session_start();?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="payment.css">
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
	$qty = $trx= $phn  = $addr = "";


if (!empty($_POST['submit_payment'])) {
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$qty = test_input($_POST["qty"]);
  $trx = test_input($_POST["trx"]);
  $phn = test_input($_POST["phn"]);
	$addr = test_input($_POST["addr"]);
	}
	 if(!empty($qty)&&!empty($trx)&&!empty($phn)&&!empty($addr)){
		$sql = "INSERT INTO payment VALUES ('$qty','$trx','$phn','$addr')";
		if(mysqli_query($conn, $sql)){
				$_SESSION['qty'] = $qty;
        header("Location: review.php"); 
		}
	}else if(!empty($qty)||!empty($trx)||!empty($phn)||!empty($addr)){
	echo "<h4 class='reg-mes'>All field must be filled!</h4>";
	}
	
} 

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
		
//Close connection
mysqli_close($conn);
?>




<!--Header / Navbar section-->
<header>
	<div class="main-menu">
		<ul>
		  <li><a href="home.php">Home</a></li>
		  <li><a href="admin.php">Admin</a></li>
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
			<button type="button" id = "paymentbtn">Payment</button>
		</div>
		
		<div id = "user-reg-id" class="user-reg">
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <label> Quantity </label>
          <input type="text" name="qty">

          <label> Transaction ID </label>
          <input type="text" name="trx">

          <label> Bkash/Nagad Phone</label>
          <input type="tel" name="phn">

          <label> Address</label>
          <input type="text" name="addr">

          <a href="ulogin.php"> 
          <input type="submit" name="submit_payment" value="Payment">  
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