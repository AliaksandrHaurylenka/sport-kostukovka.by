<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/params.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'language' => 'ru-RU', //язык сайта
    'modules' => [],
    'components' => [
      //AdminLTE https://github.com/dmstr/yii2-adminlte-asset
        'view' => [
            'theme' => [
                'pathMap' => [
                  //'@app/views' => '@vendor/dmstr/yii2-adminlte-asset/example-views/yiisoft/yii2-app'
                    '@app/views' => '@app/views/yii2-app'//скопировали папку из закоментированного пути в указанный путь
                ],
            ],
        ],
    
        'request' => [
            'csrfParam' => '_csrf-backend',
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '8pLfim-AMEohxrYfJOLthxYtTkrFVbZH',

          /*в проектах убирается /admin
          и пишется какое-нибудь другое имя,
          для затруднения попасть в админ-панель из вне
          */
            'baseUrl' => '/sportkost',//изменить на имя пользователя
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
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
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
    ],
    'controllerMap' => [
        'elfinder' => [
            'class' => 'mihaildev\elfinder\PathController',
            'access' => ['@'],
            'root' => [
            	'baseUrl'=>'../../frontend/web',//Url для вывода изображения
               'basePath'=>'@frontend/web',//начальный путь для сохранения
               'path' => 'upload/global',//продолжение пути для сохранения
               'name' => 'Global'
            ],
        ]
    ],
    'params' => $params,
];
