<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="user_list.css">
</head>
<body>

<?php
// $host = "localhost"; //IP of your database
// $userName = "root"; //Username for database login
// $userPass = ""; //Password associated with the username
// $database = "med"; //Your database name
// $name = $email = $phone = $username = $pass ="";

$connectQuery = mysqli_connect("localhost", "root", "", "med");

if(mysqli_connect_errno()){
    echo mysqli_connect_error();
    exit();
}else{
    $selectQuery = "SELECT * FROM pharmacy_owner";
    $result = mysqli_query($connectQuery,$selectQuery);
    if(mysqli_num_rows($result) > 0){
    }else{
        $msg = "No Record found";
    }
}
?>


<div class="main-menu">
	<ul>
	  <li><a href="home.php">Home</a></li>
	  <li><a href="admin.php">Admin</a></li>
	  <li><a href="Pharmacy.html">Pharmacy Owner</a></li>
	  <li><a href="ulogin.php">User</a></li>
	</ul>
</div>
<div class="big-text"></div>


<div class = "show_user_list">
    <h1>The User list Information.</h1>
    <table border="1px" style="width:600px; line-height:40px;">
        <thead>
            <tr>
                <th>Shop Name</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Username</th>
                <th>Password</th>
                <th>License</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($row = mysqli_fetch_assoc($result)){
             ?>
                <tr>
                    <td><?php echo $row['shop_name'];?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                    <td><?php echo $row['license']; ?></td>
                <tr>
            <?php } ?>
        </tbody>
    </table>
</div>


</body>
</html>