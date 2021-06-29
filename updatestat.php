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
$roomno = isset($_POST['roomno']) ? $_POST['roomno']  : '';
$category = isset($_POST['category']) ? $_POST['category']  : '';
$status = isset($_POST['status']) ? $_POST['status']  : '';


$sql = "UPDATE rooms SET status='$status' WHERE roomno='$roomno' or category='$category'";

if ($conn->query($sql) == TRUE) 
{
    
    header("Location:records.php");
}
else 
{
    echo '<script>alert("Error !")</script>';
   echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>