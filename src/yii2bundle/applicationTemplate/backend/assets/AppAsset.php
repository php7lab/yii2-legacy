<?php

namespace yii2bundle\applicationTemplate\backend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle {
	public $basePath = '@webroot';
	public $baseUrl = '@web';
	public $css = [
		'css/main.css',
	];
	public $depends = [
		'yii2bundle\applicationTemplate\common\assets\main\MainAsset',
		'yii2bundle\applicationTemplate\backend\assets\adminLte\AdminLteAsset',
	];
}
