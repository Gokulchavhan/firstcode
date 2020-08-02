<html>
<body>
<form method="POST" action=""><center>
  Email:<br>
  <input type="text" name="email"><br>
  Password:<br>
  <input type="password" name="psw"><br><br>
  <input type="submit" name="submit" value="log in"></center>
</form>
</body>
</html>
<?php
session_start(); 
include 'db.php';
$yes = 0;
if(isset($_POST["submit"])) {
    $email=$_POST['email'];
    $psw=$_POST['psw'];
    $usercheck= "SELECT * FROM `MyGuests` WHERE `email` = '$email' and `password` = '$psw'";
    $result = mysqli_query($conn,$usercheck);
    $yes = mysqli_num_rows($result);

    if ($yes == 1){
        $_SESSION["fullname"] = mysqli_fetch_assoc($result)["firstname"] ." ". mysqli_fetch_assoc($result)["lastname"];
        header('Location: dashboard.php');
    }
}
?>