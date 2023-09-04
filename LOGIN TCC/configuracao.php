<?php
require_once "vendor/autoload.php";

$clientID = '475540892793-8t0ft0cphk67alfq6mej1quprgh7ebtn.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = "http://localhost/aula/Tcc/LOGIN/login.php";
// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");



?>