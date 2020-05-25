<?php

namespace yii2tool\test\base\_application\common\enums\app;

use yii2bundle\rest\domain\enums\BaseApiVersionEnum;

class ApiVersionEnum extends BaseApiVersionEnum {
	
	const VERSION_1 = 'v1';
	const VERSION_DEFAULT = self::VERSION_1;
	
}
