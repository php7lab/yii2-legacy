<?php

use yii2bundle\db\domain\db\MigrationCreateTable as Migration;

class m190106_100010_create_reference_items_table extends Migration {

	public $table = 'reference_item';
    public $tableComment = 'Элемент справочника';

	/**
	 * @inheritdoc
	 */
	public function getColumns()
	{
		return [
			'id' => $this->primaryKey()->notNull()->comment('Идентификатор'),
			'book_id' => $this->integer()->notNull()->comment('Ссылка на спрвочник'),
			'parent_id' => $this->integer()->comment('Ссылка на вышесстоящий элемент'),
			'code' => $this->string()->comment('Код значения'),
			//'value' => $this->string()->comment('Полное обозначение'),
			//'short_value' => $this->string()->comment('Краткое обозначение'),
			'entity' => $this->string()->notNull()->comment('Сущность/смысл элемента'),
			'props' => $this->json()->null()->comment('Индивидуальные параметры'),
			'status' => $this->integer()->notNull()->defaultValue(1)->comment('Статус'),
			'sort' => $this->integer(3)->comment('Порядок сортировки'),
			'created_at' => $this->timestamp()->defaultValue(null)->comment('Дата создания'),
			'updated_at' => $this->timestamp()->defaultValue(null)->comment('Дата обновления'),
		];
	}

	public function afterCreate()
	{
		$this->myAddForeignKey(
			'book_id',
			'reference_book',
			'id',
			'CASCADE',
			'CASCADE'
		);
		$this->myAddForeignKey(
			'parent_id',
			'reference_item',
			'id',
			'CASCADE',
			'CASCADE'
		);
	}

}