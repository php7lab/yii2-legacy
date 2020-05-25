<?php

namespace yii2bundle\applicationTemplate\common\assets\main;

use Yii;
use yii\web\AssetBundle;
use yii2rails\app\domain\helpers\EnvService;
use yii2bundle\rest\domain\helpers\ApiVersionConfig;

class ScriptAsset extends AssetBundle
{
	public $sourcePath = '@yii2bundle/applicationTemplate/common/assets/main/dist';
	public $js = [
		'js/function.js',
		'js/scripts.js',
	];
	public $depends = [
		'yii\web\JqueryAsset',
	];
	
	function init() {
		parent::init();
		$this->generateConfigToJs();
	}
	
	private function generateConfigToJs() {
        $config['env']['mode'] = EnvService::get('mode');
        $config['env']['url'] = EnvService::get('url');
        $config['api']['defaultVersion'] = ApiVersionConfig::defaultApiVersionSting();
        Yii::$app->view->registerJsVar('app', $config);
	}
}
