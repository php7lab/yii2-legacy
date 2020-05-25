<?php

namespace yii2bundle\notify\domain\interfaces\repositories;

use yii2rails\domain\interfaces\repositories\CrudInterface;

interface TestInterface extends CrudInterface {

    public function truncateData($type);

}