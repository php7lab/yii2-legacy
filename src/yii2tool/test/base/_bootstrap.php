<?php

$name = 'console';
$path = '../../../../..';
defined('YII_ENV') OR define('YII_ENV', 'test');

@include_once(__DIR__ . '/' . $path . '/vendor/rocket-php-lab/yii2-legacy/src/yii2rails/app/App.php');

if(!class_exists(App::class)) {
	die('Run composer install');
}

App::init($name, 'vendor/yii2tool/yii2-test/src/base/_application');
