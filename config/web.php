<?php

$params = require(__DIR__ . '/params.php');
$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'Hello World',
            'baseUrl' => '',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
         
        
        /*Настройка ЧПУ*/
        'urlManager' => [
        'class' => 'yii\web\UrlManager',
        // Убираем index.php
        'showScriptName' => false,
        // Убираем r= routes
        'enablePrettyUrl' => true,
            'baseUrl' => '',
        'rules' => array(
            '<controller:\w+>/<id:\d+>' => '<controller>/view',
            '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
            '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
        ),
         'rules' => [
            'index'=>'site/index',
             'module'=>'site/module',
            'contact'=>'site/contact',
            'sociat'=>'site/sociat',
             'error'=>'site/error',
             'search'=>'site/search',
              'pages/<pages:\w+>'=>'site/pages',
             'enter'=>'admin/login',
             'admin'=>'admin/index',
             'logout'=>'admin/logout',
              'blog'=>'admin/blog',
             'keys'=>'admin/keys',
             'create-post'=>'admin/create_post',
             'edit-post/<post:\w+>'=>'admin/edit_post',
             'del-post/<post:\w+>'=>'admin/del_post',
             'robots.txt'=>'seo/robot',
             'googleba0ffbc68b0d9d6e.html'=>'seo/google',
             'category'=>'admin/category',
             'create-category'=>'admin/create_category',
             'edit-category/<category:\w+>'=>'admin/edit_category',
             'del-category/<category:\w+>'=>'admin/del_category',


         ],
            /*Добавляем расширение к ссылке*/
            //'suffix'=>'.html'
         ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'allowedIPs' => ['95.133.238.6'] // Для доступа к  gii нужно указать свои ip адресс

    ];
}

return $config;
