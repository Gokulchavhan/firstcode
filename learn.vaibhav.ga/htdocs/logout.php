<?php
session_start();
if (isset($_session['firstname'])){
    session_destroy();
    echo "<script>location.href='login.php'</script>";
}
else{
    echo "<script>location.href='login.php'</script>";
}





















?>