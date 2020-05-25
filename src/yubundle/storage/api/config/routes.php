<?php

$version = API_VERSION_STRING;

return [
    ["class" => "yii\\rest\UrlRule", "controller" => ["{$version}/storage-file" => "storage/person"]],
    ["class" => "yii\\rest\UrlRule", "controller" => ["{$version}/storage-personal" => "storage/person-file"]]
];
