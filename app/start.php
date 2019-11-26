<?php

    require 'vendor/autoload.php';


    // this gets called out by xcheckout at the end:
    define('SITE_URL', 'http://localhost/projects/PaymentGateway');

    $paypal = new \PayPal\Rest\ApiContext(

        new \PayPal\Auth\OAuthTokenCredential(
            'AeFTN_qYrMOCMGVwVzz3jBZj8ppPl2AImjRZF-mJiFLKiBuEMeD-95_bOHXR0t4riyqkPfXMaxf9BJ-d',
            'EIth3KQjlYonosQRAWGJPJu0-Vci-M_Eq-MeQIK3ltNOi6t8fIzW29yGeXZPoioMHfONHAx4EusGPVaD'
        )
    );

?>