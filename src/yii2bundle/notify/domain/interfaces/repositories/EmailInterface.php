<?php

namespace yii2bundle\notify\domain\interfaces\repositories;

use yii2bundle\notify\domain\entities\EmailEntity;

interface EmailInterface {
	
	public function send(EmailEntity $message);

}