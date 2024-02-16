
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
$locate = $med_name= "";
$sql = "SELECT * from medicines where stock>0";
if (!empty($_POST['loc_search'])){
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$locate = $_POST["locations"];
	$med_name = $_POST["med_name"];
	// echo $locate;

	if(($locate=="All" or empty($locate)) and !empty($med_name)){
		$sql = "SELECT *FROM medicines where medicine='$med_name'";
	}else if(empty($med_name) and $locate!="All"){
		$sql = "SELECT * FROM medicines where location='$locate'";
	}else if($locate=="All"){
		$sql = "SELECT * FROM medicines";
	}
	else{
		$sql = "SELECT * FROM medicines where location='$locate' and medicine='$med_name'";
	}
	}
}
$msg = "";
$result = mysqli_query($connectQuery,$sql);
	if(mysqli_num_rows($result) > 0){
	}else{
	    $msg = "No Medicine found";
	}

?>

<!--Header / Navbar section-->
<header>
	<div class="main-menu">
		<ul>
		  <li><a href="home.php">Home</a></li>
		  <li><a href="admin_login.php">Admin</a></li>
		  <li><a href="p_login.php">Pharmacy Owner</a></li>
		  <li><a href="ulogin.php">User</a></li>
		</ul>
	</div>
</header>

<!--Overlay-->
<div class="big-text"></div>

<div class="txt">
	<div class="products">
		<div class="products-tilte">
			<h3> Browse & Buy Your Desired Product </h3>
		</div>
		<div class="search_section">
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		      <label for="search_location">Search Medicine: </label>
		      <select name="locations" id="loc">
		      	<option selected="" value="All">Location</option>
		       <option value="Gazipur">Gazipur</option>
		        <option value="Dhaka">Dhaka</option>
		        <option value="Jhenaidah">Jhenaidah</option>
		        <option value="Sylhet">Sylhet</option>
		        <option value="Khagrachori">Khagrachori</option>
		        <option value="Naogoan">Naogaon</option>
		      </select>
		      <input type="text" name="med_name" placeholder="Medicine Name">
		      <input type="submit" value="Search" name="loc_search"/>
		</form>
		</div>


		<div class="product-row">


			<?php
				echo $msg;
                while($row = mysqli_fetch_assoc($result)){
             ?>
			<div class="single-product">
				<img class= "product_pic" src="img/product/<?php echo $row['medicine'];?>.jpg"/>
				<img class = "shop_icon" src = "img/shop.jpg"/>
				<span class = "shop_name"><?php echo $row['shop'];?></span>
				<br>
				<h3 class="product-tile"><?php echo $row['medicine'];?></h3>
				<img class="avl" src="img/avl.png">
				<span class="stck"><?php echo $row['stock'];?></span>
				<h4 class="price"><?php echo $row['price'];?>/- Pack </h4>
				<img class= "location_img" src = "img/location.png"/>
				<span class="location"><?php echo $row['location'];?></span>
				<span class="blank"></span>
				<sapn class="rating"><?php echo $row['rating'];?></sapn> <img class="rating_img" src="img/rating.png"/>
				<a href="browse_review.php" class="browse_review">Browse Review</a>
				<a class="buy" href = "ulogin.php">Buy</a>
			</div>
			<?php } ?>
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