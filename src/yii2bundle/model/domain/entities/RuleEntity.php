<?php

namespace yii2bundle\model\domain\entities;

use yii2rails\domain\BaseEntity;

/**
 * Class RuleEntity
 * 
 * @package yii2bundle\model\domain\entities
 * 
 * @property $id
 * @property $field_id
 * @property $name
 * @property $params
 * @property $sort
 * @property $status
 */
class RuleEntity extends BaseEntity {

	protected $id;
	protected $field_id;
	protected $name;
	protected $params;
    protected $sort;
	protected $status;

}
