Деплой
===

## Деплой

* `git checkout develop`
* `git pull`
* `composer update`
* `php yii cache/flush-all`

Распределение веток:

* `develop` - используется только на тестовом
* `master` - используется только на боевом

## Конфигурация

Вся необходимая конфигурация размещается в файле `common/config/env-local.php`, пример в файле `common/config/env-local-example.php`

## Развертка приложения для автотестов

### Развертка/переразвертка БД

* `php yii migrate/down 1111`
* `php yii migrate`
* `php bin fixture`

### Запуск автотестов

* `cd api`
* `php "../vendor/codeception/base/codecept" run`
