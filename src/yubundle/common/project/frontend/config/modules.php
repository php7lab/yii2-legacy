<?php

use PhpLab\Sandbox\RestClient\Yii\Web\helpers\RestModuleHelper;

$config = [
	'error' => 'yii2bundle\error\module\Module',
    'user' => 'yubundle\account\web\Module',
	'welcome' => 'yii2bundle\dashboard\web\Module',
    'guide' => 'yii2tool\guide\module\Module',
    'storage' => 'yubundle\storage\web\Module',
];

if(YII_ENV_DEV) {
	$config = RestModuleHelper::appendConfig($config);
}

return $config;
