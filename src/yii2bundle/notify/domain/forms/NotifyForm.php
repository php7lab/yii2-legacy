<?php

namespace yii2bundle\notify\domain\forms;

use yii2rails\domain\base\Model;

class NotifyForm extends Model
{
	
	public $type;
	public $subject;
	public $message;
	public $address;
	
	public function rules()
	{
		return [
			[['type', 'subject', 'message', 'address'], 'trim'],
			[['type', 'message', 'address'], 'required'],
			['type', 'in', 'range' => ['sms', 'email', 'site']],
		];
	}
	
}
