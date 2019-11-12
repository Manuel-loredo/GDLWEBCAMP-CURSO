<?php
//url aquispe
define('URL_SITIO', 'http://localhost/59%20Creando%20una%20zona%20de%20Administraci%C3%B3n%20con%20Admin%20LTE');
                     
require 'paypal/autoload.php';

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'Ae_GENSGLN11Yzu_XAxIBtUoqNSv4DhHMtp36Cdge70NeltP9LamchvnLP5yJlxmZdPVoXsWg8SJUtDP',     // ClientID
        'EMe0fI5wzKLE-SISCEplglojT04Euqy2wE_Vuge1mPDyjFYh293wPojFC_pYnnhaBf18cwddSaZ7sdYD'      // ClientSecret
    )
);



