<?php

namespace RocketLab\Bundle\Web\Helpers;

use Packages\User\Domain\Interfaces\Services\IdentityServiceInterface;
use PhpLab\Core\Domain\Exceptions\UnprocessibleEntityException;
use PhpLab\Core\Domain\Helpers\EntityHelper;
use PhpLab\Core\Libs\I18Next\Facades\I18Next;
use PhpLab\Sandbox\RestClient\Domain\Interfaces\Services\AccessServiceInterface;
use PhpLab\Sandbox\RestClient\Domain\Interfaces\Services\ProjectServiceInterface;
use PhpLab\Sandbox\RestClient\Yii\Web\models\EnvironmentForm;
use RocketLab\Bundle\Toastr\widgets\Alert;
use Yii;
use yii\base\Module;
use yii2bundle\account\domain\v3\enums\AccountPermissionEnum;
use yii\base\Model;
use yii2rails\domain\exceptions\UnprocessableEntityHttpException;
use PhpLab\Sandbox\RestClient\Domain\Interfaces\Services\EnvironmentServiceInterface;

class ErrorHelper
{

    public static function handleError(UnprocessibleEntityException $e, Model $model) {
        $arr = EntityHelper::collectionToArray($e->getErrorCollection());
        //dd($arr);
        foreach ($arr as $error) {
            if(!empty($error['field'])) {
                $model->addError($error['field'], $error['message']);
            } else {
                \App::$domain->navigation->alert->create($error['message'], Alert::TYPE_WARNING);
            }
        }
    }

}
