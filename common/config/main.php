<?php
return [
		'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
		'components' => [
		  'cache' => [
		      'class' => 'yii\caching\FileCache',
		  ],
        //Белтелеком
        /*'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=sportkos_sport-kostukovka',
            'username' => 'sportkos_swim',
            'password' => 'KN5WHmVIq8QDonyb',
            'charset' => 'utf8',
            'enableSchemaCache' => true,

            // Продолжительность кеширования схемы.
            'schemaCacheDuration' => 3600,

            // Название компонента кеша, используемого для хранения информации о схеме
            'schemaCache' => 'cache',
        ],*/
        /*'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            'useFileTransport' => FALSE,
        ],*/
		],
		'modules' => [
        'redactor' => 'yii\redactor\RedactorModule',
    ],
];
