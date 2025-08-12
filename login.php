<?php
$conn = mysqli_connect ("localhost","root","","loginform");

if (!$conn) {
   die("Database connection failed");
}

$email = $_POST['email'];
$password = $_POST['password'];

?>


