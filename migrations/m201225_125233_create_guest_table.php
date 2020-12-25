<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%guest}}`.
 */
class m201225_125233_create_guest_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%guest}}', [
            'id' => $this->primaryKey(),
            'firstname'=>$this->string(),
            'lastname'=>$this->string(),
            'email'=>$this->string(),
            'subject'=>$this->string(),
            'sentence'=>$this->text(),
            'created_at'=>$this->dateTime()->notNull(),
            'updated_at'=>$this->dateTime(),
        ]);
        $this->createIndex(
            'idx-guest-id',
            'guest',
            'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropIndex('idx-guest-id','guest');
        $this->dropTable('{{%guest}}');
    }
}
