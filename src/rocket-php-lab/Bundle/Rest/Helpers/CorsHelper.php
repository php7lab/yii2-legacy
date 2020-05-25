<?php

namespace RocketLab\Bundle\Rest\Helpers;

use PhpLab\Core\Enums\Http\HttpHeaderEnum;
use PhpLab\Core\Enums\Http\HttpMethodEnum;
use PhpLab\Core\Enums\Http\HttpServerEnum;
use PhpLab\Core\Legacy\Yii\Helpers\ArrayHelper;

class CorsHelper
{

    public static function autoload()
    {
        $headers = self::generateHeaders();
        foreach ($headers as $headerName => $headerValue) {
            \Yii::$app->response->headers->add($headerName, $headerValue);
        }
        if ($_SERVER[HttpServerEnum::REQUEST_METHOD] == HttpMethodEnum::OPTIONS) {
            \Yii::$app->response->send();
            exit;
        }
    }

    private static function generateHeaders(): array
    {
        $headers = [
            HttpHeaderEnum::ACCESS_CONTROL_ALLOW_ORIGIN => '*',
            HttpHeaderEnum::ACCESS_CONTROL_ALLOW_HEADERS => ArrayHelper::getValue($_SERVER, HttpServerEnum::HTTP_ACCESS_CONTROL_REQUEST_HEADERS),
            HttpHeaderEnum::ACCESS_CONTROL_ALLOW_METHODS => implode(', ', HttpMethodEnum::values()),
        ];
        return $headers;
    }

}
