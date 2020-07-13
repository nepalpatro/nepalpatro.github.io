<?php 
//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('558741702093-qpeil4m11drufdmhapp9minlh8t118q0.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('ewgWbIHAHjvdcMkpqGFY1Ga1');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/login%20in%20nepal%20patro/index.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');


 ?>


 