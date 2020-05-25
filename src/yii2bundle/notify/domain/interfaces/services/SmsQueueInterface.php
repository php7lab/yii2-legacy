<?php

namespace yii2bundle\notify\domain\interfaces\services;

use yii2rails\domain\interfaces\services\CrudInterface;

/**
 * Interface SmsQueueInterface
 * 
 * @package yii2bundle\notify\domain\interfaces\services
 * 
 * @property-read \yii2bundle\notify\domain\Domain $domain
 * @property-read \yii2bundle\notify\domain\interfaces\repositories\SmsQueueInterface $repository
 */
interface SmsQueueInterface extends CrudInterface {

    public function checkAllStatus();
    public function updateAllStatus($ids, $status);
    public function updateStatus($id, $status);

}
