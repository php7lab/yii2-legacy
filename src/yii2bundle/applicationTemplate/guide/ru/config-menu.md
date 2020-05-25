Меню
===

## Введение

Файлы с данными для формирования разных меню для админки и сайта находятся в `common/data/menu`.

NavBar настраивается в файлах:

* common\data\menu\navbar_backend.php
* common\data\menu\navbar_frontend.php

Это php- файлы возвращающие массив пунктов меню.

Например, для описания ссылки достаточно написать:

```php
return [
	'mainMenu' => [
		[
			'label' => ['article/main', 'title'],
			'url' => 'article/manage',
			'icon' => 'square-o',
			'module' => 'article',
			'domain' => 'article'
			'access' => PermissionEnum::ARTICLE_POST_MANAGE,
		],
	],
];
```

## Атрибуты

* `label` - надпись пункта (строка или массив)
* `url` - ссылка
* `icon` - иконка (fa)
* `module` - модуль. Если модуль отключен, пункт отображаться не будет
* `domain` - домен. Если домен отключен, пункт отображаться не будет
* `access` - полномочия (строка или массив)
* `items` - дочерние пункты
* `hide` - скрыть пункт
* `visible` - наоборот, показать пункт
* `js` - JS-код выполняемый при клике
* `active` - активный ли пункт

## Вложенные меню

Пример пункта с дочерними пунктами:

```php
return [
	'rightMenu' => [
		[
			'label' => ['notify/main', 'title'],
			'icon' => 'bell',
			'items' => [
				[
					'label' => ['notify/main', 'sms'],
					'url' => 'notify/send/sms',
				],
				[
					'label' => ['notify/main', 'email'],
					'url' => 'notify/send/email',
				],
				[
					'label' => ['notify/cron', 'title'],
					'url' => 'notify/cron',
				],
			],
		],
	],
];
```

## Классы

Можно формировать меню из класса:

```php
return [
	'rightMenu' => [
		[
			'class' => 'yii2bundle\account\module\helpers\Navigation',
		],
	],
];
```

или

```php
return [
	'rightMenu' => [
		'yii2bundle\account\module\helpers\Navigation',
	],
];
```

Класс генерирует массив для формирования пункта.

## Разделитель

Для вставки разделителя, добавляем `MenuHelper::DIVIDER`:

```php
return [
	'rightMenu' => [
		[
			'label' => ['notify/main', 'title'],
			'icon' => 'bell',
			'items' => [
				[
					'label' => ['notify/main', 'sms'],
					'url' => 'notify/send/sms',
				],
				MenuHelper::DIVIDER,
				[
					'label' => ['notify/main', 'email'],
					'url' => 'notify/send/email',
				],
				[
					'label' => ['notify/cron', 'title'],
					'url' => 'notify/cron',
				],
			],
		],
	],
];
```

## Заголовок

Если указана только надпсь, то пункт станет заголовком:

```php
return [
		[
			'label' => ['admin', 'system'],
		],
];
```
