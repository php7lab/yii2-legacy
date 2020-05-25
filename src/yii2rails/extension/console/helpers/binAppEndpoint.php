<?php

$name = 'console';
$path = '../../../../../..';

@include_once(__DIR__ . '/' . $path . '/vendor/rocket-php-lab/yii2-legacy/src/yii2rails/app/App.php');

if(!class_exists(App::class)) {
    die('Run composer install');
}

App::initPhpApplication($name);
