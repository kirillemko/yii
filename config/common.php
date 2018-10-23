<?php

$config = [
    'bootstrap' => ['log'],
    'components' => [
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                    'logVars' => [],
                ],
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['info'],
                    'categories' => ['serverAction'],
                    'logVars' => [null],
                    'logFile' => '@app/runtime/logs/serverActions.log',
                    'maxFileSize' => 1024 * 2,
                    'maxLogFiles' => 20,
                ],
            ],
        ],
    ],
    'modules' => [

    ],

    'params' => [
        'currentSpeed' => 0,
    ],
];

return $config;
