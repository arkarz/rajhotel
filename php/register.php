<?php
$link = mysqli_connect("localhost", "root", "", "login1");

if ($link == false) {
	die("ERROR: Could not connect. "
				.mysqli_connect_error());
}
$name = isset($_POST['name']) ? $_POST['name']  : '';
$email = isset($_POST['gmail']) ? $_POST['gmail']  : '';
$uname = isset($_POST['usrname']) ? $_POST['usrname']  : '';
$psw = isset($_POST['password']) ? $_POST['password']  : '';
$sql = "INSERT INTO login (Name, Email,Uname, Password)
VALUES ('$name', '$email', '$uname','$psw')";
if ($res = mysqli_query($link, $sql)) {
	header('Location: http://localhost/hotel/index.php');
	
}else {
    echo '<script>alert("Please enter valid username or password ! ")</script>';
   
	}

mysqli_close($link);
?>
