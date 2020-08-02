<?php
session_start();
if (isset($_SESSION['fullname'])){
    session_destroy();
    echo "<script>location.href='login.php'</script>";
}
else{
    echo "<script>location.href='login.php'</script>";
}





















?>
<html><body>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
</body>
</html>