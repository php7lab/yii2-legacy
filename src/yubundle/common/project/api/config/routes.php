<?php

use yii2bundle\rest\domain\helpers\ApiVersionConfig;

$config = [
	API_VERSION_STRING => 'dashboard/default/index',
	
	'@import' => [
		'vendor/rocket-php-lab/yii2-legacy/src/yii2bundle/rest/api',
	],
];

$config = ApiVersionConfig::load('routes', $config);

return $config;
