<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
		'arcticmodal/jquery.arcticmodal-0.3.css',
		'css/style.css',
		'css/media.css',
		'feedback/css/main.css',
	];
	public $js = [
		'arcticmodal/jquery.arcticmodal-0.3.min.js',
		'//yandex.st/jquery/cookie/1.0/jquery.cookie.min.js', //cookie
		'js/myScripts.js',
		'feedback/js/main.js',
	];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
