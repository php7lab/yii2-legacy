<?php

namespace yii2bundle\notify\domain\repositories\ar;

use yii2bundle\notify\domain\interfaces\repositories\SmsQueueInterface;
use yii2rails\domain\repositories\BaseRepository;
use yii2rails\extension\activeRecord\repositories\base\BaseActiveArRepository;

/**
 * Class SmsQueueRepository
 * 
 * @package yii2bundle\notify\domain\repositories\ar
 * 
 * @property-read \yii2bundle\notify\domain\Domain $domain
 */
class SmsQueueRepository extends BaseActiveArRepository implements SmsQueueInterface {

	protected $schemaClass = true;

	public function tableName()
    {
        return 'notify_sms_queue';
    }
}
