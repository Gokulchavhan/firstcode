<?php
$cookie_name = "submission";
$cookie_value = "123";
setcookie($cookie_name, $cookie_value, time() + (60*5), "/"); // 86400 = 1 day
?>