<?php

namespace yii2bundle\applicationTemplate\common\assets\main;

use yii\web\AssetBundle;

class MainAsset extends AssetBundle
{
	public $depends = [
		'yii\web\YiiAsset',
		'yii2bundle\applicationTemplate\common\assets\fontAwesome\BowerAsset',
		'yii2bundle\applicationTemplate\common\assets\main\ScriptAsset',
		'yii2bundle\applicationTemplate\common\assets\main\StyleAsset',
	];
}
