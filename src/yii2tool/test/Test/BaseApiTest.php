<?php

namespace yii2tool\test\Test;

use App;
use yii2bundle\rest\domain\entities\RequestEntity;
use yii2bundle\rest\domain\entities\ResponseEntity;
use yii2bundle\rest\domain\helpers\RestHelper;
use yii2tool\test\helpers\RestResponseHelper;
use yii2tool\test\Test\Rest;

class BaseApiTest extends Rest
{

    public $package;
    public $point;

    protected function sendRequest(RequestEntity $requestEntity) : ResponseEntity {
        $this->prepareUri($requestEntity);
        return RestResponseHelper::sendRequest($requestEntity);
    }

    protected function prepareUri(RequestEntity $requestEntity) {
        $requestEntity->uri = trim($this->point . SL . $requestEntity->uri, SL);
    }

}
