<?php

namespace yii2bundle\notify\domain\repositories\mock;

use Yii;
use yii2rails\domain\repositories\BaseRepository;
use yii2bundle\notify\domain\entities\EmailEntity;
use yii2bundle\notify\domain\entities\TestEntity;
use yii2bundle\notify\domain\interfaces\repositories\EmailInterface;

class EmailRepository extends BaseRepository implements EmailInterface {
	
	public function send(EmailEntity $message) {
		return \App::$domain->notify->test->send(TestEntity::TYPE_EMAIL, $message->address, $message->subject, $message->content);
	}
	
}