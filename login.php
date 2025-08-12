<?php
$conn = mysqli_connect ("localhost","root","","loginform");

if (!$conn) {
   die("Database connection failed");
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "Select * from Students Where email = '$email' and password = '$password'";

$result =  mysqli_query($conn, $sql);

if (mysqli_num_rows($result)>0) {
   echo "Login Successful!";
}else{ 
   echo "invalid email or password.";
}

mysqli_close($conn);
?>




