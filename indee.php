<?php // index.php
require_once 'openidlib.php';
$openid = new LightOpenID("sirmvitkalanjali.com");

$openid->identity = 'https://www.google.com/accounts/o8/id';
$openid->required = array(
  'namePerson/first',
  'namePerson/last',
  'contact/email',
);
$openid->returnUrl = 'http://sirmvitkalanjali.com/login.php'
?>

<a href="<?php echo $openid->authUrl() ?>">Login with Google</a>