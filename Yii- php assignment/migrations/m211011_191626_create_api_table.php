<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%api}}`.
 */
class m211011_191626_create_api_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%api}}', [
            'id' => $this->primaryKey(),
            'project_id' => $this->integer(),
            'module_id' => $this->integer(),
            'url' => $this->string(255)->notNull(),
            'title' => $this->string(255)->notNull(),
            'description' => $this->text(),
            'method' => $this->string(255),
            'request' => $this->string(255),
            'response' => $this->string(255),
            'created_at' => $this->timestamp()->notNull(),
        ]);

        $this->addForeignKey('FK_api_project','api', 'project_id', 'project', 'id');
        $this->addForeignKey('FK_api_module','api', 'module_id', 'module', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('FK_api_module', 'api');
        $this->dropForeignKey('FK_api_project', 'api');
        $this->dropTable('{{%api}}');
    }
}
