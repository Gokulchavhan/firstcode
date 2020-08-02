<html><head><script data-ad-client="ca-pub-3737273226916847" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script></head>
<body style="background-color:Cyan;"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<form method="POST" action=""><center>
  Email:<br>
  <input type="text" name="email"><br>
  Password:<br>
  <input type="password" name="psw"><br><br>
  <input type="submit" name="submit" value="log in"></center>
</form>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-153195185-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-153195185-1');
</script>

</body>
</html>
<?php
session_start();
include 'db.php';
$yes = 0;
if(isset($_POST["submit"])) {
    $email=$_POST['email'];
    $psw=md5($_POST['psw']);
    $usercheck= "SELECT * FROM `MyGuests` WHERE `email` = '$email' ";
    $result = mysqli_query($conn,$usercheck);
    $nemail = mysqli_num_rows($result);

    $usercheckt= "SELECT * FROM `MyGuests` WHERE `email` = '$email' and `password` = '$psw' ";
    $resultt = mysqli_query($conn,$usercheckt);
    $npsw = mysqli_num_rows($resultt);

    $userchec= "SELECT * FROM `MyGuests` WHERE `email` = '$email' and `status` = 'verified' ";
    $resul = mysqli_query($conn,$userchec);
    $nst = mysqli_num_rows($resul);

if ($nemail> 0) {


    if ($npsw>0) {

        if ($nst>0) {
            $cookie_name = "submission";
$cookie_value = "123";
setcookie($cookie_name, $cookie_value, time() + (60*5), "/"); // 86400 = 1 day
$xm=$_SERVER['REMOTE_ADDR'];
date_default_timezone_set("Asia/Kolkata");
$y=date("h:i:sa");
$z=date("Y/m/d");
$s=$z.$y;
$zp= " UPDATE `MyGuests` SET `time`='$s',`ip`='$xm' WHERE `email`='$email'";
$np=mysqli_query($conn,$zp);



 $_SESSION["fullname"] = mysqli_fetch_assoc($result)["firstname"] ." ". mysqli_fetch_assoc($result)["lastname"];
header('Location: dashboard.php');

}/*check status*/
else {
        echo 'ur email is not verified, please verify ur email';
        echo '<a href="sentmail.php">Email Verification</a>';
    }/*check status else finish*/

}/*check psw*/
else {
    echo '<b><font color="Red"><center>wrong password<br></center></font></b>';
    echo '<center><a href="forgot.php">Forgot Password</a></center>';
}/*check psw  else finish*/

}/*check email*/
else {echo '<font color="Black"><center>account doesnt exist with the given details</center><br><br></font>';
echo '<center>
<form method="POST" action="signup.php">
<input type="submit" value="sign up"></center>
</body>';}
}/*check email else finish*/
?>
