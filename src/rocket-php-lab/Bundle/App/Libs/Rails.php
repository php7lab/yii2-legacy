<?php

namespace RocketLab\Bundle\App\Libs;

use PhpLab\Core\Legacy\Yii\Helpers\FileHelper;
use PhpLab\Core\Libs\Env\DotEnvHelper;
use yii2rails\app\domain\helpers\Env;
use yii2rails\domain\base\BaseDomainLocator;
use yii2rails\domain\helpers\ConfigHelper;
use PhpLab\Core\Helpers\LoadHelper;

class Rails
{

    public static function initAll(string $rootDir = null)
    {
        self::init($rootDir);
        self::loadDomainConfig();
    }

    private static function init(string $rootDir = null)
    {
        $rootDir = $rootDir ?? FileHelper::rootPath();
        Env::load(DotEnvHelper::get());
        Constant::defineBase($rootDir);
    }

    private static function loadDomainConfig()
    {
        include __DIR__ . '/../../../../../rocket-php-lab/yii2-legacy/src/yii2rails/app/domain/helpers/Func.php';
        include __DIR__ . '/App.php';
        $domainConfig = LoadHelper::loadScript('common/config/domains.php');
        foreach ($domainConfig as $domainId => &$definition) {
            $definition = ConfigHelper::normalizeItemConfig($domainId, $definition);
        }
        \App::$domain = new BaseDomainLocator(['components' => $domainConfig]);
    }

}
