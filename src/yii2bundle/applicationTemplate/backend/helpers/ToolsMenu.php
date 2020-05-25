<?php

namespace yii2bundle\applicationTemplate\backend\helpers;

use yii2rails\extension\menu\interfaces\MenuInterface;

class ToolsMenu implements MenuInterface {
	
	public function toArray() {
		return [
			'label' => ['admin', 'tools'],
			'icon' => 'wrench',
			'items' => [
				'yii2bundle\encrypt\admin\helpers\Menu',
			],
		];
	}
	
}
