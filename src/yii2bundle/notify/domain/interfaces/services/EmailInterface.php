<?php

namespace yii2bundle\notify\domain\interfaces\services;

use yii2rails\domain\interfaces\services\CrudInterface;
use yii2bundle\notify\domain\entities\EmailEntity;

interface EmailInterface extends CrudInterface {
	
	public function sendEntity(EmailEntity $emailEntity);
	public function directSendEntity(EmailEntity $emailEntity);
	
	/**
	 * @param $address
	 * @param $subject
	 * @param $content
	 *
	 * @return mixed
	 *
	 * @deprecated
	 */
	public function send($address, $subject, $content);
	
	/**
	 * @param $address
	 * @param $subject
	 * @param $content
	 *
	 * @return mixed
	 *
	 * @deprecated
	 */
	public function directSend($address, $subject, $content);
	
}