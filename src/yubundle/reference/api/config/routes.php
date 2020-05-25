<?php

$version = API_VERSION_STRING;

return [
    ["class" => "yii\\rest\\UrlRule", "controller" => ["{$version}/reference-book" => "reference/book"]],
    ["class" => "yii\\rest\\UrlRule", "controller" => ["{$version}/reference-item" => "reference/item"]],
];
