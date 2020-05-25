<?php

namespace yii2tool\vendor\console\commands\domainUnitInput;

use yii2rails\extension\console\helpers\input\Select;
use PhpLab\Core\Legacy\Yii\Helpers\ArrayHelper;
use yii2tool\vendor\console\commands\Base;

class SelectDomainCommand extends Base {
	
	public function run() {
		$event = $this->getEvent();
		if(!empty($event->namespace)) {
			return;
		}
		$collection = \App::$domain->vendor->pretty->all();
		$domainAliases = ArrayHelper::getColumn($collection, 'path');
		$domainAlias = Select::display('Select domain', $domainAliases);
		$event->namespace = ArrayHelper::first($domainAlias);
	}
	
}
