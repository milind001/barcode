<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
include 'connection.php';

session_start();// Starting Session
// Storing Session
$echeck= $_SESSION['c_user'];
// SQL Query To Fetch Complete Information Of User
$sql=mysqli_query($con,"SELECT * FROM login WHERE username ='$echeck'");
$row = mysqli_fetch_assoc($sql);
$cusr =$row['username'];
if(!isset($cusr)){
mysqli_close($con); // Closing Connection
header('Location: index.php'); // Redirecting To Home Page
}
?>