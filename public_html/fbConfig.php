<?php
/**
* Created by mvoase
*/
session_start();

require_once 'inc/facebook.php';

$appId = '153732558458851'; //Facebook App ID
$appSecret = '724411e79836e38ab3ab0c8f0e6baf2c'; // Facebook App Secret
$redirectURL = 'http://localhost/facebook_login_with_php/'; // Callback URL
$fbPermissions = 'email';  //Required facebook permissions

//Call Facebook API
$facebook = new Facebook(array(
  'appId'  => $appId,
  'secret' => $appSecret
));
$fbUser = $facebook->getUser();

?>
