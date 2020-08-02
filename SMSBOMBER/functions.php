<?php
function tinder($url,$mobile){
    $data = array("phone_number"=>"91".$mobile);
    $data_string = json_encode($data);

   $curl = curl_init();
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
   curl_setopt($curl, CURLOPT_POSTFIELDS,$data_string);
   curl_setopt($curl, CURLOPT_HTTPHEADER, array(
       'content-type: application/json',
		'Mozilla/5.0 (Linux; Android 8.0.0; Pixel 2 XL Build/OPD1.170816.004) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Mobile Safari/537.36'
	)); 
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
   curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);  
   $ch = curl_exec($curl);
   curl_close($curl);
}
function redbus($url){
   $curl = curl_init();
   curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
   curl_setopt($curl, CURLOPT_HTTPHEADER, array(
	'user-agent:: Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Mobile Safari/537.36',
	'x-requested-with: XMLHttpRequest'
	)); 
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
   curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);  
   $ch = curl_exec($curl);
}	
function happily($url){
   $curl = curl_init();
   curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
   curl_setopt($curl, CURLOPT_HTTPHEADER, array(
	'user-agent:: Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Mobile Safari/537.36',
	'x-requested-with: XMLHttpRequest'
	)); 
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
   curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);  
   $ch = curl_exec($curl);
}	
function confirmtkt($url){
   $curl = curl_init();
   curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
   curl_setopt($curl, CURLOPT_HTTPHEADER, array(
	'user-agent:: Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Mobile Safari/537.36',
	'x-requested-with: XMLHttpRequest'
	)); 
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
   curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);  
   $ch = curl_exec($curl);
}
function dvotp($url){
   $curl = curl_init();
   curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
   curl_setopt($curl, CURLOPT_HTTPHEADER, array(
	'user-agent:: Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Mobile Safari/537.36',
	'x-requested-with: XMLHttpRequest'
	)); 
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
   curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);  
   $ch = curl_exec($curl);
}
function bsnl($url,$mobile){
 
   $curl = curl_init();
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
   curl_setopt($curl, CURLOPT_POSTFIELDS,"mobile=".$mobile."");
   curl_setopt($curl, CURLOPT_HTTPHEADER, array(
	'Referer: https://portal.bsnl.in/myportal/authorize.do',
	'User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36',
	'X-Requested-With: XMLHttpRequest'
	)); 
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
   curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);  
   $ch = curl_exec($curl);
   curl_close($curl);
}	
function flipkart($url,$mobile){
   $curl = curl_init();
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
   curl_setopt($curl, CURLOPT_POSTFIELDS,"loginId=+91".$mobile."");
   curl_setopt($curl, CURLOPT_HTTPHEADER, array(
		'X-user-agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36 FKUA/website/41/website/Desktop'
	)); 
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
   curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);  
   $ch = curl_exec($curl);
   curl_close($curl);
}
function hike($url,$mobile){
   $data = array("msisdn" => "+91".$mobile."","method" => "pin");
   $data_string = json_encode($data);
   $curl = curl_init();
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
   curl_setopt($curl, CURLOPT_POSTFIELDS,$data_string);
   curl_setopt($curl, CURLOPT_HTTPHEADER, array(
	'User-Agent: android-5.15.22',
	'Content-Type: application/json',
	'Host: api.im.hike.in'
	)); 
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
   curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);  
   $ch = curl_exec($curl);
   curl_close($curl);
}	
function justdial($url,$mobile){
   $curl = curl_init();
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
   curl_setopt($curl, CURLOPT_POSTFIELDS,"mob=".$mobile."&vcode=&rsend=0&name=ramesh");
   curl_setopt($curl, CURLOPT_HTTPHEADER, array(
	'User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36',
	'X-Requested-With: XMLHttpRequest'
	)); 
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
   curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);  
   $ch = curl_exec($curl);
   curl_close($curl);
}	
function kindle($url,$mobile){
   $curl = curl_init();
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
   curl_setopt($curl, CURLOPT_POSTFIELDS,"recipient=+91".$mobile."&client=klite&communicationType=sms");
   curl_setopt($curl, CURLOPT_HTTPHEADER, array(
   'origin: https://www.amazon.in',
	'referer: https://www.amazon.in/kindle-dbs/fd/kcp',
	'content-type: application/x-www-form-urlencoded',
	'User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36',
	'X-Requested-With: XMLHttpRequest'
	)); 
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
   curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);  
   $ch = curl_exec($curl);
   curl_close($curl);
}	
function lenskart($url,$mobile){
   $curl = curl_init();
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
   curl_setopt($curl, CURLOPT_POSTFIELDS,"mobile=".$mobile."&submit=1");
   curl_setopt($curl, CURLOPT_HTTPHEADER, array(
		'User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36'
	)); 
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
   curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);  
   $ch = curl_exec($curl);
   curl_close($curl);
}	
function mobiwik($url,$mobile){
 $data = array("cell" => $mobile);
 $data_string = json_encode($data);
 
   $curl = curl_init();
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
   curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
   curl_setopt($curl, CURLOPT_HTTPHEADER, array(
	'Content-Type: application/json',
	'User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36',
	'X-MClient: 0'
	)); 
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
   curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);  
   $ch = curl_exec($curl);
   curl_close($curl);
}	
function oyo($url){
   $curl = curl_init();
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
   curl_setopt($curl, CURLOPT_HTTPHEADER, array(
	'user-agent:: Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Mobile Safari/537.36'
	)); 
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
   curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);  
   $ch = curl_exec($curl);
   curl_close($curl);
}	
function spencers($url,$mobile){
   $curl = curl_init();
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
   curl_setopt($curl, CURLOPT_POSTFIELDS,"mobile=".$mobile."&action=register&email=");
   curl_setopt($curl, CURLOPT_HTTPHEADER, array(
	'User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36',
	'X-Requested-With: XMLHttpRequest'
	)); 
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
   curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);  
   $ch = curl_exec($curl);
   curl_close($curl);
}	
function sulekha($url,$mobile){
 
   $curl = curl_init();
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
   curl_setopt($curl, CURLOPT_POSTFIELDS,"mob=".$mobile."&vcode=&rsend=0&name=ramesh");
   curl_setopt($curl, CURLOPT_HTTPHEADER, array(
	'User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36',
	'X-Requested-With: XMLHttpRequest'
	)); 
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
   curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);  
   $ch = curl_exec($curl);
   curl_close($curl);
}	
function treebo($url,$mobile){
  $data = array("phone_number" => $mobile);
  $data_string = json_encode($data);
   $curl = curl_init();
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
   curl_setopt($curl, CURLOPT_POSTFIELDS,$data_string);
   curl_setopt($curl, CURLOPT_HTTPHEADER, array(
	'Content-Type: application/json',
	'User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36'
	)); 
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
   curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);  
   $ch = curl_exec($curl);
   curl_close($curl);
}	
function urbanclap($url,$mobile){
 $data = array("isd_code" => "+91","phone_wo_isd" => $mobile);

 $data_string = json_encode(array("country_id" => "IND","phone" =>$data,"device_type" => "customer"));
 
   $curl = curl_init();
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
   curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
   curl_setopt($curl, CURLOPT_HTTPHEADER, array(
	'user-agent:: Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Mobile Safari/537.36',
	'Content-Type:application/json',
	'x-requested-with: XMLHttpRequest'
	)); 
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
   curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);  
   $ch = curl_exec($curl);
   curl_close($curl);
 
}
function wynk($url,$mobile){
	$data_string = json_encode(array("msisdn" => $mobile));
   $curl = curl_init();
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
   curl_setopt($curl, CURLOPT_POSTFIELDS,$data_string);
   curl_setopt($curl, CURLOPT_HTTPHEADER, array(
	'User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36'
	)); 
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
   curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);  
   $ch = curl_exec($curl);
   curl_close($curl);
}	
function yatra($url,$mobile){
   $curl = curl_init();
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
   curl_setopt($curl, CURLOPT_POSTFIELDS,"isdCode=91&mobileNumber=".$mobile."");
   curl_setopt($curl, CURLOPT_HTTPHEADER, array(
	'User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36',
	'X-Requested-With: XMLHttpRequest'
	)); 
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
   curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);  
   $ch = curl_exec($curl);
   curl_close($curl);}

?>