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
	$shp_name = $rate= $review  = $medicine_name = "";


if (!empty($_POST['submit_review'])) {
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$rate = test_input($_POST["rate"]);
  $review = test_input($_POST["review"]);
  $shp_name = test_input($_POST["shp_name"]);
	$medicine_name = test_input($_POST["medicine_name"]);
	}
	 if(!empty($shp_name)&&!empty($rate)&&!empty($review)&&!empty($medicine_name)){



  
  // FETCHING rating from database review
	 	$query = "SELECT * FROM medicines where shop='$shp_name' and medicine='$medicine_name'";
  	$result = mysqli_query($conn,$query);
  	$row = $row = mysqli_fetch_assoc($result);
  	$cur_rate = $row["rating"];
    
    $rate = ($rate+$cur_rate)/2;

		$sql = "INSERT INTO review VALUES ('$shp_name','$rate','$review','$medicine_name')";
		if(mysqli_query($conn, $sql)){ 
				$qty = $_SESSION['qty'];
				$sql1 = "UPDATE medicines SET stock = stock-$qty where shop='$shp_name' and medicine='$medicine_name'";
				mysqli_query($conn,$sql1);
				$sql2 = "UPDATE medicines SET rating='$rate' where shop='$shp_name' and medicine='$medicine_name'";
				mysqli_query($conn,$sql2);
        header("Location: success.html"); 
		}
	}else if(!empty($qty)||!empty($trx)||!empty($phn)||!empty($addr)){
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
		
//Close connection
mysqli_close($conn);
?>




<!--Header / Navbar section-->
<header>
	<div class="main-menu">
		<ul>
		  <li><a href="home.php">Home</a></li>
		  <li><a href="admin.php">Admin</a></li>
		  <li><a href="Pharmacy.html">Pharmacy Owner</a></li>
		  <li><a href="ulogin.php">User</a></li>
		</ul>
	</div>
</header>

<!--Overlay-->
<div class="big-text"></div>

<div class="txt">
	<div class="reg-wrapper">
		<div class="reg-type">
			<button type="button" id = "paymentbtn">Payment Successful! Please Rate Our Service</button>
		</div>
		
		<div id = "user-reg-id" class="user-reg">
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <label> Shop Name </label>
          <input type="text" name="shp_name">

          <label class="rati">Rating</label>
           <div class="rate">
					    <input type="radio" id="star5" name="rate" value="5" />
					    <label for="star5" title="text">5 stars</label>
					    <input type="radio" id="star4" name="rate" value="4" />
					    <label for="star4" title="text">4 stars</label>
					    <input type="radio" id="star3" name="rate" value="3" />
					    <label for="star3" title="text">3 stars</label>
					    <input type="radio" id="star2" name="rate" value="2" />
					    <label for="star2" title="text">2 stars</label>
					    <input type="radio" id="star1" name="rate" value="1" />
					    <label for="star1" title="text">1 star</label>
				  </div>

          <label class="des"> Descriptive Review</label>
          <input type="text" name="review">

          <label> Medicine</label>
          <input type="text" name="medicine_name">

          <a href="ulogin.php"> 
          <input type="submit" name="submit_review" value="Submit">  
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