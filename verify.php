<html>
<body><meta name="viewport" content="width=device-width, initial-scale=1.0"><center>

<form method="post" action="">
Enter otp: <input type="text" name="otp"><br><br>
Enter email: <input type="text" name="email"><br><br><br>
<input type="submit" value="submit" name="submit"></center>
</form>

</body>
</html>

<?php

if(isset($_POST["submit"])){
    include 'db.php';
    $ct= $_POST["otp"];
    $c = $_POST["email"];
    $nquer="SELECT `email` FROM `MyGuests` WHERE `email`='$c'";
    $a=mysqli_query($conn,$nquer);
    mysqli_fetch_assoc($a);
    $ye = mysqli_num_rows($a);
    if ($ye>0){
        $nque="SELECT `otp` FROM `MyGuests` WHERE `email`='$c'";
        $d=mysqli_query($conn,$nque);
        $row=mysqli_fetch_assoc($d);
        $x=$row["otp"];
        if ($ct==$x){

            $z="UPDATE `MyGuests` SET `status`= 'verified' WHERE `email`='$c'";
            mysqli_query($conn,$z);
            echo "verified<br>";
            echo "now u can log in<br>";
            echo '<a href="login.php">log in</a>';
        }else {
            echo "wrong otp";
    }
}}
?>
