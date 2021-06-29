<?php
$link = mysqli_connect("localhost", "root", "", "login1");

if ($link == false) {
	die("ERROR: Could not connect. "
				.mysqli_connect_error());
}
$cname = isset($_POST['cname']) ? $_POST['cname']  : '';
$cno = isset($_POST['cno']) ? $_POST['cno']  : '';
$cvv = isset($_POST['cvv']) ? $_POST['cvv']  : '';
$amt = isset($_POST['amt']) ? $_POST['amt']  : '';
$month = isset($_POST['mnth']) ? $_POST['mnth']  : '';
$year = isset($_POST['yr']) ? $_POST['yr']  : '';
$sql = "INSERT INTO payment ( cname, cno,cvv,amount, mnth,yr)
VALUES ('$cname', '$cno', '$cvv','$amt', '$month','$year')";
if ($res = mysqli_query($link, $sql)) {
	header('Location: http://localhost/hotel/pay.php');
	
}else {
    echo '<script>alert("Please enter valid information ! ")</script>';
   
	}

mysqli_close($link);
?>
