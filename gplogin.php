<?php
require 'facebook.php';  // Include facebook SDK file
//require 'functions.php';  // Include functions
$facebook = new Facebook(array(
  'appId'  => '1388619241398804',   // Facebook App ID
  'secret' => 'dcad22258c837016ac4d8cc1b7c34e61',  // Facebook App Secret
  'cookie' => true,
));
$user = $facebook->getUser();
 $loginUrl = $facebook->getLoginUrl(array(
'scope' => 'email', // Permissions to request from the user
));
if ($user) {
  try {
  
    $user_profile = $facebook->api('/me');

       $fbid = $user_profile['id'];                 // To Get Facebook ID
    $fbuname = $user_profile['username'];  // To Get Facebook Username
    $fbfullname = $user_profile['name']; // To Get Facebook full name
    $femail = $user_profile['email'];    // To Get Facebook email ID
/* ---- Session Variables -----*/
    $_SESSION['FBID'] = $fbid;          
    $_SESSION['USERNAME'] = $fbuname;
            $_SESSION['name'] = $fbfullname;
    $_SESSION['email'] =  $femail;
    //       checkuser($fbid,$fbuname,$fbfullname,$femail);    // To update local DB
  } catch (FacebookApiException $e) {
    error_log($e);
   $user = null;
  }
}
if ($user) {
	header("Location: bregister.php");
} else {
$loginUrl = $facebook->getLoginUrl(array(
'scope' => 'email', // Permissions to request from the user
));

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <title>KALANJALI 2014</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <script src="js/jquery-latest.min.js"></script> 
  <style type="text/css">
  @media (min-width: 768px){
      .class{
        height: 100%;
        width: 100%;
      }
      .wrap{
        padding-top: 13%;
        padding-bottom: 10%;
        text-align: center; 
      }
    }
  @media (max-width: 768px){
      .class{
        height: 100%;
        width: 100%;
      }
      .wrap{
        padding-top: 33%;
        padding-bottom: 10%;
        text-align: center; 
      }
    }
  </style>
      
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <div class="center">
        <div class="wrap">
            <h3>Sign In Via</h3>
            <ul style="list-style-type: none;    padding: 0px;    margin: 0px;">
                <li><a href="<?php echo $loginUrl; ?> "><img src="img/fb.jpg" style="width:190px;"></a></li>
                <li>
                <button class="g-signin"
        data-scope="https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email"

        data-clientid="976636512599-pckmndl8uafplpqnla3tbmenebujr51h.apps.googleusercontent.com"
        data-callback="onSignInCallback"
        data-theme="dark"
        data-cookiepolicy="single_host_origin"
        data-requestvisibleactions="http://schemas.google.com/AddActivity"
        data-width="wide">
    </button>
                </li>
                <br>
            </ul>
        </div>
    </div>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>
    <script type="text/javascript">
      (function() {
       var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
       po.src = 'https://apis.google.com/js/client:plusone.js';
       var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
     })();
    </script> 
    <script type="text/javascript"> 
    function onSignInCallback(authResult) {
  if (authResult['access_token']) {
    // Successfully authorized
   gapi.client.load('plus', 'v1', function() {
  gapi.client.plus.people.get( {'userId' : 'me'} ).execute(function(resp) {
    // Shows profile information
    var email = resp.emails[0].value;
    var name = resp.displayName;
          window.location.href = "http://sirmvitkalanjali.com/storesession.php"+'?email='+email+'&name='+name;

  })
});
  } else if (authResult['error']) {
    // There was an error.
    // Possible error codes:
    //   "access_denied" - User denied access to your app
    //   "immediate_failed" - Could not automatially log in the user
    // console.log('There was an error: ' + authResult['error']);
  }
}


</script>
</body>
</html>  
