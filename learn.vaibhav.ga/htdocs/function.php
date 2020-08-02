<?php
function check($email,$password){
    $usercheck= "SELECT * FROM `MyGuests` WHERE `email` = '$email'";
    $result = mysqli_query($conn,$usercheck);
    $yes = mysqli_num_rows($result);
    if ($yes > 0){
        echo "<h1><center>User already exists</center></h1>";
        
    }
    
    
    elseif ($yes == 0) {
        
        $sql = "INSERT INTO MyGuests (firstname, lastname, email, password) VALUES ('$firstname', '$lastname', '$email', '$password')";

        if (mysqli_query($conn, $sql)) {
            echo '<center><h1 style="color:green;">SIGN UP SUCCESSFUL!</h1></center>';
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        
    }
}

?>