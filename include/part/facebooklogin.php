<?php
require ("..\include\lib\src\Facebook\autoload.php");
session_start();
if(isset($_GET['state'])) {
    $_SESSION['FBRLH_state'] = $_GET['state'];
}
/*Step 1: Enter Credentials*/
$fb = new \Facebook\Facebook([
    'app_id' => '354297298348542',
    'app_secret' => '3ff8e6cd90079511145dc8a2db8794a2',
    'default_graph_version' => 'v2.10',
    //'default_access_token' => '{access-token}', // optional
]);
/*Step 2 Create the url*/
if(empty($access_token)) {
    echo "<a href='{$fb->getRedirectLoginHelper()->getLoginUrl("http://localhost/pro/page/facebooklogin.php")}'>Login with Facebook </a>";
}
/*Step 3 : Get Access Token*/
$access_token = $fb->getRedirectLoginHelper()->getAccessToken();
/*Step 4: Get the graph user*/
if(isset($access_token)) {
    try {
        $response = $fb->get('/me',$access_token);
        $fb_user = $response->getGraphUser();
        echo  $fb_user->getName();
        //  var_dump($fb_user);
    } catch (\Facebook\Exceptions\FacebookResponseException $e) {
        echo  'Graph returned an error: ' . $e->getMessage();
    } catch (\Facebook\Exceptions\FacebookSDKException $e) {
        // When validation fails or other local issues
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
    }
}