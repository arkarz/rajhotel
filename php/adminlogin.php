<?php
$link = mysqli_connect("localhost", "root", "", "login1");

if ($link == false) {
	die("ERROR: Could not connect. "
				.mysqli_connect_error());
}
$ademail = isset($_POST['ademail']) ? $_POST['ademail']  : '';
$adpass = isset($_POST['adpass']) ? $_POST['adpass']  : '';
$sql = "SELECT * FROM admin WHERE ademail='$ademail' AND adpass='$adpass'";
if ($res = mysqli_query($link, $sql)) {
	header('Location: http://localhost/hotel/index1.php');
	
}else {
    echo '<script>alert("Please enter valid username or password ! ")</script>';
   
	}

mysqli_close($link);
?>