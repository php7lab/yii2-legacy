<?php

namespace yii2bundle\notify\domain\enums;

use yii2rails\extension\enum\base\BaseEnum;

class TypeEnum extends BaseEnum
{
    const SMSC_FORMAT_SMS = 0;
    const SMSC_FORMAT_CALL = 9;

    const SMS = 'sms';
    const EMAIL = 'email';

}