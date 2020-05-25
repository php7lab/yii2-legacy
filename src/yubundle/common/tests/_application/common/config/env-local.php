<?php

$config = [
    'servers' => [
        'db' => [
            'main' => [
                'driver' => 'sqlite',
                'dbname' => '@common/runtime/sqlite/test.db',
            ],
        ]
    ],
];

$configFile = __DIR__ . '/../../../../../../../../../vendor/rocket-php-lab/yii2-legacy/src/yubundle/common/project/common/config/env-local.php';
return \yii2rails\extension\common\helpers\Helper::includeConfig($configFile, $config);