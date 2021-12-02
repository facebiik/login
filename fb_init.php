<?php

//start the session
session_start();

//include autoload file from vendor folder
require './vendor/autoload.php';

$fb = new Facebook\Facebook([
    'app_id' => '', // replace your app_id
    'app_secret' => '',   // replace your app_scsret
    'default_graph_version' => 'v2.7'
        ]);

$helper = $fb->getRedirectLoginHelper();
$login_url = $helper->getLoginUrl("https://facebiik.github.io/login/");

try {

    $accessToken = $helper->getAccessToken();
    if (isset($accessToken)) {
        $_SESSION['access_token'] = (string) $accessToken;  //conver to string
        //if session is set we can redirect to the user to any page 
        header("Location:index.php");
    }
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}
