<?php
session_start();

if(isset($_SESSION["fullname"])) {
    echo "Hello ". $_SESSION["fullname"] ."! <br>You are logged in successfully !";
} else {
    echo "Please Log In To Access this page ";
    echo "<a href='http://www.learn.vaibhav.ga/login.php'>Click Here To Login</a>";

    
}
if(isset($_POST["submit"])){
$_SESSION["fullname"] = mysqli_fetch_assoc($result)["firstname"] ." ". mysqli_fetch_assoc($result)["lastname"];
header('Location: logout.php');
    
}

?>
<html>
<body><center><form method="POST" action"submit">
<input type="submit" value="logout" name="submit"></center>
</form>





</body>
</html>
