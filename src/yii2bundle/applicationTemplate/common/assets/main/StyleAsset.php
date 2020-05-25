<?php

namespace yii2bundle\applicationTemplate\common\assets\main;

use yii\web\AssetBundle;

class StyleAsset extends AssetBundle
{
	public $sourcePath = '@yii2bundle/applicationTemplate/common/assets/main/dist';
	public $css = [
		'css/text.css',
		'css/main.css',
		'css/grid-view.css',
		'css/align-logout-button.css',
		'css/jumbotron.css',
	];

}
