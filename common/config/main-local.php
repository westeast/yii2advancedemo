<?php
return [
    'components' => [
        'db' => [  
             'class' => 'yii\db\Connection',  
             'dsn' => 'mysql:host=00.58.149.31;port=3307;dbname=yii2',  
             'username' => 'xxxxxxxx',  
             'password' => 'xxxxxx',  
             'charset' => 'utf8', 
        ], 
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
    ],
];
