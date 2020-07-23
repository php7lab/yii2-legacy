<?php

use yii2bundle\rest\domain\helpers\ApiVersionConfig;

$config = [
	API_VERSION_STRING => 'dashboard/default/index',
	
	'@import' => [
		'vendor/php7lab/yii2-legacy/src/yii2bundle/rest/api',
	],
];

$config = ApiVersionConfig::load('routes', $config);

return $config;
