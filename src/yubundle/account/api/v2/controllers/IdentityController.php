<?php

namespace yubundle\account\api\v2\controllers;

use yii2bundle\applicationTemplate\common\enums\ApplicationPermissionEnum;
use yii2rails\extension\web\helpers\Behavior;
use yii2bundle\rest\domain\rest\ActiveControllerWithQuery as Controller;

class IdentityController extends Controller
{

	public $service = 'account.identity';

	/**
	 * @inheritdoc
	 */
	public function behaviors() {
		return [
			'cors' => Behavior::cors(),
			'authenticator' => Behavior::auth(),
            'access' => Behavior::access(ApplicationPermissionEnum::BACKEND_ALL),
		];
	}

}