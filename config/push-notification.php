<?php

return array(

    'notiticationIOS' => array(
        'environment' =>'development',
        'certificate' => app_path().'/Cert/TestNotificationPushCert.pem',
        'passPhrase'  =>'manager',
        'service'     =>'apns'
    ),
    'appNameAndroid' => array(
        'environment' =>'production',
        'apiKey'      =>'yourAPIKey',
        'service'     =>'gcm'
    )

);