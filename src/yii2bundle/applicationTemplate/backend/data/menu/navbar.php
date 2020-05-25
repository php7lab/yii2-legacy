<?php

return [
	'mainMenu' => [
		/*[
			'label' => ['admin', 'main'],
		],
		'yii2bundle\article\admin\helpers\Menu',*/
		[
			'label' => ['admin', 'system'],
		],
		'yii2bundle\applicationTemplate\backend\helpers\Menu',
		'yii2bundle\notify\admin\helpers\Menu',
		'yii2bundle\rbac\admin\helpers\Menu',
		[
			'label' => ['admin', 'develop'],
		],
		'yii2bundle\applicationTemplate\backend\helpers\ToolsMenu',
		'yii2tool\vendor\admin\helpers\Menu',
        'yubundle\reference\admin\helpers\Menu',
        'yubundle\money\admin\helpers\Menu'
	],
];