<?php

namespace yii2bundle\applicationTemplate\backend\helpers;

use yii2bundle\applicationTemplate\common\enums\ApplicationPermissionEnum;
use yii2rails\extension\menu\interfaces\MenuInterface;

class Menu implements MenuInterface {
	
	public function toArray() {
		return [
			'label' => ['admin', 'app'],
			'icon' => 'square-o',
			'items' => [
				'yii2tool\offline\admin\helpers\Menu',
				'yii2tool\cleaner\admin\helpers\Menu',
				'yii2bundle\lang\module\helpers\Menu',
				[
					'label' => ['admin', 'logreader'],
					//'icon' => '',
					'url' => 'logreader',
					'module' => 'logreader',
					'access' => ApplicationPermissionEnum::LOGREADER_MANAGE,
				],
				'yii2tool\init\admin\helpers\Menu',
			],
		];
	}

}
