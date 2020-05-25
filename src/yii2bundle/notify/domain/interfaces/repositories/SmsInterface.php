<?php

namespace yii2bundle\notify\domain\interfaces\repositories;

use yii2rails\domain\values\TimeValue;
use yii2bundle\notify\domain\entities\SmsEntity;

interface SmsInterface {
	
	public function send(SmsEntity $message);

    /**
     * @param $id
     * @param $phone
     * @return false|TimeValue
     */
    public function isDelivered($id, $phone);

}