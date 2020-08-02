<?php
session_start();
$userName = $_POST['userId'];
$userName = explode('@',$userName);
$userName = $userName[0];

$curl = curl_init();
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_URL, 'https://www.instagram.com/'.$userName.'/?__a=1');
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
$ch = curl_exec($curl);
$jsonResult=json_decode($ch,true);
$is_private = $jsonResult['graphql']['user']['is_private'];
$followers = $jsonResult['graphql']['user']['edge_followed_by']['count'];
$pic_url = $jsonResult['graphql']['user']['profile_pic_url_hd'];
$profile_Id = $jsonResult['graphql']['user']['id'];
echo $pic_url;


$_SESSION['is_private']=$is_private;
$_SESSION['followers']=$followers;
$_SESSION['pic_url']=$pic_url;
$_SESSION['profile_Id']=$profile_Id;
$_SESSION['profile_Name']=$userName;
echo $_SESSION['is_private'];
?>