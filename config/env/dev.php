<?php

return [
    'components' => [

        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=nanosi',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
    ],
    'params' => [
        'usbDevice' => 'COM4'
    ],

];
