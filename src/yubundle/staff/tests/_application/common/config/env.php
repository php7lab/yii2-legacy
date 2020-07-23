<?php

$config = [

];

$configFile = __DIR__ . '/../../../../../../../../../vendor/php7lab/yii2-legacy/src/yubundle/common/project/common/config/env.php';
return \yii2rails\extension\common\helpers\Helper::includeConfig($configFile, $config);