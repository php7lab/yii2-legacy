Руководство
===

Для добавления путей для поиска классов миграций, 
используйте конфиг `env.php`.
В секцию `config.filters` добавьте фильтр:

```php
return [
	//...
	'config' => [
		'filters' => [
			//...
			[
				'class' => 'yii2bundle\db\domain\filters\migration\SetPath',
				'path' => [
					'@vendor/rocket-php-lab/yii2-legacy/src/yii2bundle/rbac/domain/migrations',
                    '@vendor/rocket-php-lab/yii2-legacy/src/yii2bundle/rest/domain/migrations',
				],
				'scan' => [
					'@domain',
				],
			],
			//...
		],
	],
];
```
