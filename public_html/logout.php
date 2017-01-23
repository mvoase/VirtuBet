<?php
//Include FB config file
require_once 'fbConfig.php';
//Remove App permissions
$fbUid = $_SESSION['userData']['oauth_uid'];
$facebook->api('/'.$fbUid.'/permissions','DELETE');

//Unset user data from session
unset($_SESSION['userData']);

//Destroy session data
$facebook->destroySession();

//Redirect to homepage
header("Location:index.php");
?>
