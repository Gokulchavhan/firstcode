
<html>
<body bgcolor="LightSkyBlue">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <form method="POST" action=""><center>
           Email:<input type="text" name="email"><br><br><br>
             otp:<input type="text" name="otp"><br><br><br><br>
    New Password:<input type="text" name="npsw"><br><br><br><br>
    <input type="submit" name="submit"><br><br>
</center>
</body>
</html>
<?php
include 'db.php';
if(isset($_POST["submit"])){
    $otp=$_POST['otp'];
    $email=$_POST['email'];
    $psw=md5($_POST['npsw']);
    $check = "SELECT `otp` FROM `MyGuests` WHERE `email`='$email'";
    $result = mysqli_query($conn,$check);
    $yes = mysqli_num_rows($result);
    if ($yes>0){
    $row=mysqli_fetch_assoc($result);
    $x=$row["otp"];
    if ($x==$otp){
    $z = " UPDATE `MyGuests` SET `password`='$psw' WHERE `email`='$email'";
    $n=mysqli_query($conn,$z);
    echo 'done';

}else{echo '<font color="red"><center>wrong otp</center></font>';}
    }else{
        echo '<font color="red"><center>Enter a wrong email</center></font>';
    }
}
 ?>
