<?php

namespace yii2tool\vendor\console\events;

use yii\base\Event;

class DomainEvent extends Event {
	
	public $namespace;
	public $name;
	public $isActive;
	public $drivers;
	public $attributes;
	public $types;
	
}
