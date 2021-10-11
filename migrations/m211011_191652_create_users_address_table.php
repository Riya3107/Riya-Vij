<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%users_address}}`.
 */
class m211011_191652_create_users_address_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%users_address}}', [
            'id' => $this->primaryKey(),
            'users_id' => $this->integer(), 
            'address1' => $this->string(255),
            'address2' => $this->string(255),
            'zip' => $this->string(50),
            'city' => $this->string(155),
            'state' => $this->string(100),
            'country' => $this->string(155),
        ]);

        $this->addForeignKey('FK_usersaddress_users', 'users_address', 'users_id','users', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('FK_usersaddress_users', 'users_address');
        $this->dropTable('{{%users_address}}');
    }
}
