<?php

use yii2bundle\db\domain\db\MigrationCreateTable as Migration;

/**
 * Class m190217_103809_create_common.localizations_table
 * 
 * @package 
 */
class m190217_103809_create_localizations_table extends Migration {

    public $table = 'reference_item_translation';
    public $tableComment = 'Локализация элементов';

	/**
	 * @inheritdoc
	 */
	public function getColumns()
	{
		return [
			'id' => $this->primaryKey()->notNull(),
			'item_id' => $this->integer()->notNull(),
			'language_code' => $this->string(4)->notNull(),
			'title' => $this->string()->notNull(),
			'short_title' => $this->string()->notNull(),
		];
	}

	public function afterCreate()
	{
		$this->myAddForeignKey(
			'item_id',
			'reference_item',
			'id',
			'CASCADE',
			'CASCADE'
		);
		$this->myAddForeignKey(
			'language_code',
			'language',
			'code',
			'CASCADE',
			'CASCADE'
		);
	}

}