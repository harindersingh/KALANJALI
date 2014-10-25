<?php

require_once("src/facebook.php");

$config=array(
'appId'=> '1388619241398804',
'secret'=> 'dcad22258c837016ac4d8cc1b7c34e61',
'fileUpload'=> false,
'allowSignedRequest'=> false
);

$facebook= new Facebook($config);
$user_id= $facebook->getUser();
  
if($user_id)
{
    try{
     $user_profile =$facebook->api('/me');
      
      if (!$user_id) {
    $args = array('scope' => 'email');
    echo '<a href="' . $facebook->getLoginUrl() . '">Login with Facebook</a>';
} else {
    echo '<a href="' . $facebook->getLogoutUrl() . '">Logout</a>';
}
       
       
       
       
       
       print_r($user_profile["link"]);
       //print_r($user_profile);
       echo "hello world";
     }
    catch(FacebookApiException $e) {
        $login_url=$facebook->getLoginUrl();
        echo 'Please <a href="'.$login_url.'">login.</a>';
        error_log($e->getType());
        error_log($e->getMessage());
    }
}
else{
    $login_url= $facebook->getLoginUrl();
    echo 'NOT LOGGED IN Please <a href="'.$login_url.'">login.</a>';
}


echo $user_profile[email];
?>