<?php

use yii\db\Migration;

/**
 * Class m190601_133247_file_storage_item
 */
class m190601_133247_file_storage_item extends Migration
{
	/**
	 * @inheritdoc
	 */
	public function safeUp()
    {
        $this->createTable('{{%file_storage_item}}', [
            'id' => $this->primaryKey(),
            'component' => $this->string()->notNull(),
            'base_url' => $this->string(1024)->notNull(),
            'path' => $this->string(1024)->notNull(),
            'type' => $this->string(),
            'size' => $this->integer(),
            'name' => $this->string(),
            'upload_ip' => $this->string(45),
            'created_at' => $this->integer()->notNull()
        ]);
    }

    /**
     * @return bool|void
     */
    public function down()
    {
        $this->dropTable('{{%file_storage_item}}');
    }

	/*
	// Use up()/down() to run migration code without a transaction.
	public function up()
	{

	}

	public function down()
	{
		echo "m190601_133247_file_storage_item cannot be reverted.\n";

		return false;
	}
	*/
}
