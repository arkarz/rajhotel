<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login1";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) 
{
die("Connection failed: " . $conn->connect_error);
} 
$name = isset($_POST['cname']) ? $_POST['cname']  : '';
$aadhar = isset($_POST['aadhar']) ? $_POST['aadhar']  : '';
$category = isset($_POST['type']) ? $_POST['type']  : '';
$status = isset($_POST['status']) ? $_POST['status'] : '';
$contact = isset($_POST['contact']) ? $_POST['contact']  : '';
$roomno = isset($_POST['roomno']) ? $_POST['roomno']  : '';
$checkin = isset($_POST['cin']) ? $_POST['cin']  : '';
$checkout = isset($_POST['cout']) ? $_POST['cout'] : '';
$child = isset($_POST['child']) ? $_POST['child']  : '';
$adult = isset($_POST['adult']) ? $_POST['adult']  : '';


$sql = "INSERT INTO book(name,aadhar,category,status,contact,roomid,checkin,checkout,child,adult)
VALUES('$name','$aadhar','$category','$status','$contact','$roomno','$checkin','$checkout','$child','$adult')";
//$pqr = "UPDATE rooms SET status='$status' WHERE roomno='$roomno' AND category='$category'";

if ($conn->query($sql) == TRUE) 
{
    
    header("Location:http://localhost/hotel/status.php");
}
else 
{
    echo '<script>alert("Error !")</script>';
   echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>