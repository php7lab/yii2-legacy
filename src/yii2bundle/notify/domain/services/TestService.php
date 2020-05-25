<?php

namespace yii2bundle\notify\domain\services;

use yii2rails\domain\services\base\BaseActiveService;
use yii2bundle\notify\domain\entities\TestEntity;
use yii2bundle\notify\domain\interfaces\services\TestInterface;

/**
 * Class SmsService
 *
 * @package yii2bundle\notify\domain\services
 *
 * @property \yii2bundle\notify\domain\interfaces\repositories\TestInterface $repository
 */
class TestService extends BaseActiveService implements TestInterface {
	
	public function send($type, $address, $subject, $message) {
		$entity = new TestEntity();
		$entity->type = $type;
		$entity->address = $address;
		$entity->subject = $subject;
		$entity->message = $message;
		$this->repository->insert($entity);
	}

    public function truncate($type) {
        $this->repository->truncateData($type);
    }

}
