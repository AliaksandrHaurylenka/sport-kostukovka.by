<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/params.php')
);

return [
	'defaultRoute' => 'site/index',//задает начальную страницу при загрузке сайта
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'language' => 'ru-RU', //язык сайта
    'controllerNamespace' => 'frontend\controllers',
	//'bootstrap'    => ['assetsAutoCompress'],//сжатие файлов
    'components' => [
		//'assetsAutoCompress' => [
        	//'class'         => '\skeeks\yii2\assetsAuto\AssetsAutoCompressComponent',//сжатие файлов
       //],
        'request' => [
        	'cookieValidationKey' => 'yQGlR1ly6O9EegRePhpGk-LinAfnk5tq',
            'class' => 'common\components\Request',
        	'web'=> '/frontend/web',
        ],
        'cache' => [
            //'class' => 'yii\caching\DbCache',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        
               
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            	'<actionMain:(index|swiming|wrestling|light-athletics|heavy-athletics|football|volleyball)>' => 'site/<actionMain>',
            	'<actionAddit:(history|hall-of-fame|glass|service|timetable|contact)>' => 'site/<actionAddit>',
            ],
        ],


        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => false,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'mail.sport-kostukovka.by',
                'username' => 'mail@sport-kostukovka.by',
                'password' => '+$)MEZY5iq5B',
                'port' => '465',
                'encryption' => 'ssl',
            ],
        ],
        
    ],
    'params' => $params,
];
