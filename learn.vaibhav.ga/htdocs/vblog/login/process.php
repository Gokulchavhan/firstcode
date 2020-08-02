<?php
include '../db.php';
//get values from form in log in.php file
$username=$_POST['user'];
$password=$_POST['pass'];



//query database
$sql = "INSERT INTO `Users`(`Username`, `Password`) VALUES ('vaibhav','vaibhav@1')";
$result=mysqli_query($conn, $sql);
$v=mysqli_fetch_assoc($result);
echo $v;
echo $username;
echo $password;
?>
