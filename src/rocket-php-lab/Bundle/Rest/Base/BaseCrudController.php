<?php

namespace RocketLab\Bundle\Rest\Base;

use PhpLab\Core\Domain\Helpers\QueryHelper;
use PhpLab\Core\Domain\Interfaces\Service\CrudServiceInterface;
use PhpLab\Core\Enums\Http\HttpHeaderEnum;
use PhpLab\Core\Exceptions\NotFoundException;
use Yii;
use yii\web\NotFoundHttpException;

class BaseCrudController extends BaseController
{

    /** @var CrudServiceInterface */
    protected $service;

    public function verbs(): array
    {
        return [
            'index' => ['GET'],
            'view' => ['GET'],
            'create' => ['POST'],
            'update' => ['PUT'],
            'delete' => ['DELETE'],
        ];
    }

    protected function prepareQuery() {

    }

    public function actionIndex()
    {
        $queryParams = Yii::$app->request->get();
        $query = QueryHelper::getAllParams($queryParams);
        return $this->service->getDataProvider($query);
    }

    public function actionView($id)
    {
        $queryParams = Yii::$app->request->get();
        unset($queryParams['id']);
        $query = QueryHelper::getAllParams($queryParams);
        try {
            return $this->service->oneById($id, $query);
        } catch (NotFoundException $e) {
            throw new NotFoundHttpException();
        }
    }

    public function actionCreate()
    {
        $body = Yii::$app->request->getBodyParams();
        //$body = $this->callActionTrigger(ActionEventEnum::BEFORE_WRITE, $body);
        $entity = $this->service->create($body);
        Yii::$app->response->setStatusCode(201);
        Yii::$app->response->headers->add(HttpHeaderEnum::X_ENTITY_ID, $entity->getId());
        //$response = $this->callActionTrigger(ActionEventEnum::AFTER_WRITE, $response);
        //return $response;
    }

    public function actionUpdate()
    {
        $id = Yii::$app->request->getQueryParam('id');
        $body = Yii::$app->request->getBodyParams();
        //$body = $this->callActionTrigger(ActionEventEnum::BEFORE_WRITE, $body);
        $this->service->updateById($id, $body);
        Yii::$app->response->setStatusCode(204);
        //Yii::$app->response->headers->add(HttpHeaderEnum::X_ENTITY_ID, $entity->getId());
        //$response = $this->callActionTrigger(ActionEventEnum::AFTER_WRITE, $response);
    }

    public function actionDelete()
    {
        $id = Yii::$app->request->getQueryParam('id');
        //$body = $this->callActionTrigger(ActionEventEnum::BEFORE_WRITE, $body);
        $this->service->deleteById($id);
        Yii::$app->response->setStatusCode(204);
    }
}
