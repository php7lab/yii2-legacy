<?php

namespace yii2bundle\applicationTemplate\common\helpers;

use yii\helpers\ArrayHelper;
use yii2bundle\applicationTemplate\common\enums\ApplicationPermissionEnum;
use yii2rails\extension\web\helpers\Behavior;

class CommonModuleHelper {
	
	public static function getConfig($name) {
		$config = [
			'debug' => [
				'class' => 'yii\debug\Module',
				'allowedIPs' => ['127.0.0.1'],
				'as access' => Behavior::access(ApplicationPermissionEnum::BACKEND_ALL),
			],
			'gii' => [
				'class' => 'yii\gii\Module',
				'allowedIPs' => ['127.0.0.1'],
				'as access' => Behavior::access(ApplicationPermissionEnum::BACKEND_ALL),
				'isEnabled' => YII_ENV_DEV,
			],
		];
		return ArrayHelper::getValue($config, $name);
	}
	
}