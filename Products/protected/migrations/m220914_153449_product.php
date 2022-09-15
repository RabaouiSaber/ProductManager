<?php

class m220914_153449_product extends CDbMigration
{
	public function up()
	{
		$this->createTable('product', array(
            'id' => 'pk',
            'name' => 'string NOT NULL',
            'details' => 'text',
        ));
	}

	public function down()
	{
		echo "m220914_153449_product does not support migration down.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}