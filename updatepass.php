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
$usr = isset($_POST['usrn']) ? $_POST['usrn']  : '';
$opass = isset($_POST['opwd']) ? $_POST['opwd']  : '';
$npass = isset($_POST['npwd']) ? $_POST['npwd']  : '';


$sql = "UPDATE login SET Password='$npass' WHERE Uname='$usr' AND Password='$opass'";

if ($conn->query($sql) == TRUE) 
{ 
    header("Location:http://localhost/hotel/records.php");
}
else 
{
    echo '<script>alert("Error !")</script>';
   echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>