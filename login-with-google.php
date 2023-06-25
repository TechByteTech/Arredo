<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once 'vendor/autoload.php';
unset($_SESSION['new-user']);
unset($_SESSION['new-user-email']);
unset($_SESSION['access_token']);


// init configuration
$clientID = '779351481461-9n18aarb3ch19dno7j5fuvod6qft41la.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'http://localhost/arredo/login-with-google.php';

// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");

// authenticate code from Google OAuth Flow
if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    // store the token in Session
    $_SESSION['access_token'] = $token;
}

// if access_token session is set then user has already logged in
if(isset($_SESSION['access_token'])) {
    $attributes = $client->verifyIdToken($_SESSION['access_token']['id_token'],$clientID);
    $client->revokeToken();
    include('mysql-connection.php');
    $email=$attributes['email'];
    $select_userdata=mysqli_query($con,"select * from userdata where email='$email'");
    if(mysqli_num_rows($select_userdata)==1){
      $userid=$email;
      $option=0;
      $ciphermethod="AES-128-CTR";
      $ivlength=openssl_cipher_iv_length($ciphermethod);
      $encription_iv='1234567891011121';
      $encription_key="9543FERFCVDVDVJDVKN%%%EFSDFSDCSDCVSSVXCVXCVSDFWG3235RFWEFKJDVNSDK";
      $encription=openssl_encrypt($userid,$ciphermethod,$encription_key,$option,$encription_iv);
      setcookie("userid_cookie",$encription,time()+(60*60*24*100000));
    //  setcookie("useriv_cookie",$encription_iv,time()+(60*60*24*100000));

          $_SESSION['userdata']=$userid;
          unset($_SESSION['access_token']);
          header('location:index.php');
          exit();

    }
    else{
      $new_user="new-user";
      $_SESSION['new-user']=$new_user;
      $_SESSION['new-user-email']=$email;
     header('location:login-form.php');
    //    header("location:signup-with-scanner.php");
      exit();


    }



}
else {
    $scopes = [ Google_Service_Oauth2::USERINFO_PROFILE, Google_Service_Oauth2::USERINFO_EMAIL ];
    $authUrl = $client->createAuthUrl($scopes);

    header('location:'.$authUrl);

}
?>
