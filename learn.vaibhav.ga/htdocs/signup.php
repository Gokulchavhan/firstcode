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

if(isset($_POST["submit"])){
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $ip = $_SERVER['REMOTE_ADDR'];

    if ((empty($firstname)) || (empty($lastname)) || (empty($email)) || (empty($password)) ) {
        echo "<center><h1>Fill the full form Idiot !</h1></center>";
    } 
    $usercheck= "SELECT * FROM `MyGuests` WHERE `email` = '$email'";
    $result = mysqli_query($conn,$usercheck);
    $yes = mysqli_num_rows($result);
    if ($yes > 0){
    echo "<h1><center>User already exists</center></h1>";}
         
    if ($yes==0){
        
        $sql = "INSERT INTO MyGuests (firstname, lastname, email, password,ip) VALUES ('$firstname', '$lastname', '$email', '$password', '$ip')";

        if (mysqli_query($conn, $sql)) {
            echo '<center><h1 style="color:green;">SIGN UP SUCCESSFUL!</h1></center>';
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        
    }
}
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Sign Up Page ! </title>
  </head>
  <body><br><br>
  <div class="container">
    <div class="row"><br><br>
        <div class="col-sm-3"></div>
        <div class="col-sm-6" style="background-color:lightgray;border:1px solid black;border-radius:3px;padding:15px;"><br><br>
            <form method="POST" action="">
                 <label>First Name:</label>
                  <input type="text" name="firstname" ><br><br>
                  <label>Last Name:</label>
                  <input type="text" name="lastname" ><br><br>
                 <label>Email:</label>
                  <input type="email" name="email" ><br><br>
                   <label>Password:</label>
                  <input type="password" name="password" ><br><br>
                <input style ="padding:3px;background-color:lightgreen;border:2px solid black;border-radius:10px;font-size:25px;" type="submit" name="submit" value="SiGN Up IdioT ! ">

        </form><center>
        <form method="post" action="login.php">
        <input type="submit"value="log in"></center>        
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>