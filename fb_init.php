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
$login_url = $helper->getLoginUrl("http://localhost/fb-login/");
