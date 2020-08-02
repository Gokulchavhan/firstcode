<?php

$servername = "sql304.epizy.com";
$username = "epiz_24713662";
$password = "jiCC7NszU2z";
$dbname = "epiz_24713662_shadow";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>