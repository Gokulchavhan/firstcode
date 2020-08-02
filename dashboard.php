<?php
session_start();

if(isset($_SESSION["fullname"])) {
    echo "Hello ". $_SESSION["fullname"] ."! <br>You are logged in successfully !";
    echo '<html>
<body style="background-color:coral;"><meta name="viewport" content="width=device-width, initial-scale=1.0">

<form method="POST" action="sme.php">
<input type="submit" value="SME">
</form><br><br><br>

<form method="POST" action="physics.php">
<input type="submit" value="PHYSICS">
</form><br><br><br>


<form method="POST" action="em.php">
<input type="submit" value="EM">
</form><br><br><br>


<form method="POST" action="math.php">
<input type="submit" value="MATH">
</form><br><br><br>















<center><form method="POST" action"submit">
<input type="submit" value="logout" name="submit"></center>
</form>
</body>
</html>';
if(isset($_POST["submit"])){
$_SESSION["fullname"] = mysqli_fetch_assoc($result)["name"] ." ". mysqli_fetch_assoc($result)["lastname"];
header('Location: logout.php');

}
} else {
    echo "Please Log In To Access this page ";
    echo "<a href='http://www.vaibhav.ga/login.php'>Click Here To Login</a>";

}



?>

<html>
<body>





</body>
</html>
