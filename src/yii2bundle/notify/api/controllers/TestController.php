<?php

namespace yii2bundle\notify\api\controllers;

use Yii;
use yii2bundle\notify\domain\enums\NotifyPermissionEnum;
use yii2bundle\notify\domain\enums\TypeEnum;
use yii2bundle\rest\domain\rest\ActiveControllerWithQuery as Controller;
use yii2rails\extension\web\helpers\Behavior;

class TestController extends Controller
{

    public $service = 'notify.test';

    public function init()
    {
        Yii::$app->queue->run(false);
        parent::init();
    }

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'cors' => Behavior::cors(),
            'authenticator' => Behavior::auth(['create', 'update', 'delete']),
            'access' => Behavior::access(NotifyPermissionEnum::MANAGE),
        ];
    }

    public function actionClean() {
        \App::$domain->notify->test->truncate(TypeEnum::SMS);
    }

}
