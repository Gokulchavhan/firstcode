<html>
<body><meta name="viewport" content="width=device-width, initial-scale=1.0"><center>

<form method="post" action="">
Email: <input type="text" name="email">
<input type="submit" value="sent mail" name="submit"></center>
</form>

</body>
</html>

<?php
require 'phpmailer/PHPMailerAutoload.php';
include 'db.php';
if(isset($_POST["submit"])){

if(isset($_POST["submit"])){
$c = $_POST["email"];
$nquery="SELECT `otp` FROM `MyGuests` WHERE `email` = '$c'";
$a=mysqli_query($conn,$nquery);
$ye = mysqli_num_rows($a);
if ($ye==0){
    echo '<center><form method="post" action="signup.php">
      <input type="submit" value="signup" ></center>
    </form>
';
}
if ($ye>0){
$row=mysqli_fetch_assoc($a);
$x=$row["otp"];
    $mail = new PHPMailer;
    $mail->isSMTP();

    $mail->Host = "smtp.gmail.com";
    $mail->Port=587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure="tls";
    $mail->Username="padghanvaibhav2@gmail.com";
    $mail->Password="xmwewbeigfhvvnof";
    $mail->setFrom("padghanvaibhav2@gmail.com","Vaibhav");
    $mail->addAddress($c);
    $mail->addReplyTo("padghanvaibhav2@gmail.com");
    $mail->isHTML(true);
    $mail->Subject="verification mail";
    $y="ur otp for verification at MCOEP submissions is ";
    $mail->Body=$y .$x;
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
    else{
        echo "Email has been sent!";
        echo '<center><form method="post" action="verify.php">
          <input type="submit" value="Enter otp" ></center>
        </form>
    ';
    }
}}}
    ?>
