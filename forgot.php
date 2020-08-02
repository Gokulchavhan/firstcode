<html>
<body bgcolor="Turquoise">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <form method="POST" action=""><center>
    Email:<input type="text" name="email" style="width:300px;"><br><br>
    <input type="submit" name="submit">
</form>
</center>

<?php
include 'db.php';
if(isset($_POST["submit"])) {
$email=$_POST['email'];
$check = " SELECT * FROM `MyGuests` WHERE `email`='$email' ";
$result = mysqli_query($conn,$check);
$yes = mysqli_num_rows($result);
    if($yes>0){
    $g=rand(999,99999);
    $z = "UPDATE `MyGuests` SET `otp`= $g WHERE `email`='$email'";
    $resul = mysqli_query($conn,$z);
    if(isset($_POST["submit"])){
    require 'phpmailer/PHPMailerAutoload.php';
        if(isset($_POST["submit"])){
        $c = $_POST["email"];
        $nquery="SELECT `otp` FROM `MyGuests` WHERE `email` = '$email'";
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
                $mail->Subject="Forgot Password";
                $y="ur otp to forgot password at MCOEP submissions is ";
                $mail->Body=$y .$x;
                if (!$mail->send()) {
                    echo "Mailer Error: " . $mail->ErrorInfo;
                }  else{
                    echo '<font color="DarkGreen"><center>Email has been sent!</center></font>';
                    echo '<center><br><br><form method="POST" action="set.php">
                    <input type="submit" name="test" value="set password">
                    </form><br><br><br></center>';
                }
            }
        }
    }

    }
else{
    echo '<font color="red"><center>Account doesnt exist, Please enter a correct email</center></font>';
}


}



?>


</body>
</html>
