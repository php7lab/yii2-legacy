<?php

namespace yii2bundle\notify\admin\helpers;

use yii2rails\domain\data\Query;
use yii2rails\domain\interfaces\repositories\ReadInterface;
use yii2rails\extension\menu\interfaces\MenuInterface;
use yii2bundle\notify\domain\entities\TestEntity;
use yii2bundle\notify\domain\enums\NotifyPermissionEnum;
use yii2bundle\notify\domain\helpers\JobHelper;

class Menu implements MenuInterface {
	
	public function toArray() {
		$emailCount = $smsCount = 0;
		$is_dev = \App::$domain->notify->repositories->email instanceof ReadInterface;
		if($is_dev) {
			$smsCount = \App::$domain->notify->test->count(Query::forge()->where('type', TestEntity::TYPE_SMS));
			$emailCount = \App::$domain->notify->test->count(Query::forge()->where('type', TestEntity::TYPE_EMAIL));
		}
		$cronCount = count(JobHelper::getAll());
		$sumBadge = $smsCount + $emailCount + $cronCount;
		return [
			'label' => ['notify/main', 'title'],
			'module' => 'notify',
			'access' => NotifyPermissionEnum::MANAGE,
			'icon' => 'bell-o',
			'badge' => $sumBadge ?: null,
			'items' => [
				[
					'label' => ['notify/main', 'sms'],
					'url' => 'notify/sms',
					'badge' => $smsCount ?: null,
					'visible' => $is_dev,
				],
				[
					'label' => ['notify/main', 'email'],
					'url' => 'notify/email',
					'badge' => $emailCount ?: null,
					'visible' => $is_dev,
				],
				[
					'label' => ['notify/cron', 'title'],
					'url' => 'notify/cron',
					'badge' => $cronCount ?: null,
				],
			],
		];
	}
	
}
