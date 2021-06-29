<?php
$link = mysqli_connect("localhost", "root", "", "login1");

if ($link == false) {
	die("ERROR: Could not connect. "
				.mysqli_connect_error());
}
$uname = isset($_POST['uname']) ? $_POST['uname']  : '';
$psw = isset($_POST['psw']) ? $_POST['psw']  : '';
$sql = "SELECT * FROM login WHERE Uname='$uname' AND Password='$psw'";
if ($res = mysqli_query($link, $sql)) {
	header('Location: http://localhost/hotel/our-room.php');
	
}else {
    echo '<script>alert("Please enter valid username or password ! ")</script>';
   
	}

mysqli_close($link);
?>