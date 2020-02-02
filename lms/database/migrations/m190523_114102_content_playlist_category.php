<?php

use yii\db\Migration;

/**
 * Class m190523_114102_content_playlist_category
 */
class m190523_114102_content_playlist_category extends Migration
{
	/**
	 * @inheritdoc
	 */
	public function safeUp()
	{
        $this->createTable('{{%content}}', [
            'id' => $this->primaryKey(),
            'uuid' => $this->string(7)->notNull()->unique(),
            'name' => $this->string(255)->notNull(),
            'description' => $this->text(),
            'photo_base_url' => $this->string(255),
            'photo_path' => $this->string(255),
            'file' => $this->string(255)->notNull(),
            'youtube_url' => $this->string(255),
            'playlist_id' => $this->integer(),
            'duration' => $this->time(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'views' => $this->integer(),
            'created_by' => $this->integer(),
            'is_deleted' => $this->smallInteger()->notNull()->defaultValue(0),
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->timestamp()->append('ON UPDATE CURRENT_TIMESTAMP'),
            'published_at' => $this->timestamp(),
        ]);

        $this->createTable('{{%playlist}}', [
            'id' => $this->primaryKey(),
            'uuid' => $this->string(7)->notNull()->unique(),
            'name' => $this->string(255)->notNull(),
            'description' => $this->text(),
            'sort_order' => $this->smallInteger()->notNull()->defaultValue(99),
            'category_id' => $this->integer(),
            'start_date' => $this->timestamp(),
            'duration' => $this->time(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_by' => $this->integer(),
            'is_deleted' => $this->smallInteger()->notNull()->defaultValue(0),
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->timestamp()->append('ON UPDATE CURRENT_TIMESTAMP'),
        ]);

        
        $this->createTable('{{%category}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'slug' => $this->string(255)->notNull(),
            'description' => $this->text(),
            'photo_base_url' => $this->string(255),
            'photo_path' => $this->string(255),
            'parent_id' => $this->integer(),
            'sort_order' => $this->smallInteger()->notNull()->defaultValue(99),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'is_deleted' => $this->smallInteger()->notNull()->defaultValue(0),
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->timestamp()->append('ON UPDATE CURRENT_TIMESTAMP'),
            ]);
            
        $this->addForeignKey('fk_content_playlist', '{{%content}}', 'playlist_id', '{{%playlist}}', 'id', 'cascade', 'cascade');
        $this->addForeignKey('fk_playlist_category', '{{%playlist}}', 'category_id', '{{%category}}', 'id', 'cascade', 'cascade');
        $this->addForeignKey('fk_category_section', '{{%category}}', 'parent_id', '{{%category}}', 'id', 'cascade', 'cascade');
	}

	/**
	 * @inheritdoc
	 */
	public function safeDown()
	{
        $this->dropForeignKey('fk_content_playlist', '{{%content}}');
        $this->dropForeignKey('fk_playlist_category', '{{%playlist}}');
        $this->dropForeignKey('fk_category_section', '{{%category}}');	

        $this->dropTable('{{%content}}');    
        $this->dropTable('{{%playlist}}');    
        $this->dropTable('{{%category}}');
    }

	/*
	// Use up()/down() to run migration code without a transaction.
	public function up()
	{

	}

	public function down()
	{
		echo "m190523_114102_content cannot be reverted.\n";

		return false;
	}
	*/
}
