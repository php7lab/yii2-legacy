<?php

use yii2bundle\rest\domain\helpers\ApiVersionConfig;

$config = [
    'rest' => [
        'class' => 'yii2bundle\rest\api\Module',
        'isEnabledDoc' => YII_ENV_DEV,
    ],
];

return ApiVersionConfig::load('modules', $config);
