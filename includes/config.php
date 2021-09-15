<?php 

//url aquispe
define('URL_SITIO', 'http://localhost/sitio_conferencia');

require 'paypal/autoload.php';

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'AZeIcv26EUDRcuiYgjni-NfDMyTu6BeauzUQODnmS5USQwXRehpAYjDUVhDCezgnwsuRZi4Vwrm4pv88',     // ClientID
        'EADfLsH7NqwNnaPzE9Y04OL04rnyOsGMXA4j6UfZfXlwUBpDchlOTz8v15zWyIPZ01PrhNzUcrzbvtza'      // ClientSecret
    )
);

