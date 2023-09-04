<?php
    require_once 'configuracao.php';
    // autenticando codigo do google OAuth Flow

    if(isset($_GET['code'])){
        $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
        $cliente->setAccessToken($token['access_token']);
        

        $google_oauth = new Google_Service_Oauth2($client);
        $google_account_info = $google_oauth->userinfo->get();
        $email = $google_account_info->email;
        $name = $google_account_info->name;
    }
?>