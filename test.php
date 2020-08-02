<?php
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL,'https://www.instagram.com/joysingh751726/?__a=1');
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_HEADER, true);
$result = curl_exec($curl);
echo $result;
echo curl_error($curl);
echo 'hi';



?>