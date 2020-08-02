<?php

$room = $_POST['room'];

if(strlen($room)>20 or strlen($room)<2){
    $message = "Please choose a name between 2 to 20 characters";

echo '<script language="javascript">';
echo 'alert(" '.$message.' ");';
echo 'window.location="https://greatonlinetools.com/chatroom";  ';
echo '</script>';
}
elseif (!ctype_alnum($room)) {
    # code...
    $message = "Please choose an alpha numeric room name";

    echo '<script language="javascript">';
    echo 'alert(" '.$message.' ");';
    echo 'window.location="https://greatonlinetools.com/chatroom";  ';
    echo '</script>';
}

else{
    // connect to the database
    include 'db.php';
    echo "let's chat now.";
}

// check if room already exists
$sql="SELECT * FROM `chatroom` WHERE `roomname`='$room'";
$result = mysqli_query($conn, $sql);
if ($result) {
    # code...
    if (mysqli_num_rows($result) >0) 
    {
        $message = "Please choose a different room name. This roomname is already claimed";
        echo '<script language="javascript">';
        echo 'alert(" '.$message.' ");';
        echo 'window.location="https://greatonlinetools.com/chatroom";  ';
        echo '</script>';
    }else {
        $sql="INSERT INTO `chatroom` (`roomname`) VALUES ('$room');";
        if(mysqli_query($conn,$sql)){
            $message = "your room is ready and you can chat now!";
            echo '<script language="javascript">';
            echo 'alert(" '.$message.' ");';
            echo 'window.location="https://greatonlinetools.com/chatroom/rooms.php?roomname='.$room.'";  ';
            echo '</script>';

        }
    }
}






?>