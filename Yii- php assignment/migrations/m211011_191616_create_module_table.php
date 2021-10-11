<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%module}}`.
 */
class m211011_191616_create_module_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%module}}', [
            'id' => $this->primaryKey(),
            'project_id' => $this->integer(),
            'title' => $this->string(255)->notNull(),
            'description' => $this->text(),
            'created_at' => $this->timestamp()->notNull(),
        ]);

        $this->addForeignKey('FK_module_project','module', 'project_id', 'project','id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('FK_module_project', 'module');
        $this->dropTable('{{%module}}');
    }
}
