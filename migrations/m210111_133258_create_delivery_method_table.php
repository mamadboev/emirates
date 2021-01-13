<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%delivery_method}}`.
 */
class m210111_133258_create_delivery_method_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%delivery_method}}', [
            'id' => $this->primaryKey(),
            'd_method_name'=>$this->string(),
            'd_method_day'=>$this->string(),
            'd_method_price'=>$this->money(),
            'created_at'=>$this->dateTime(),
            'updated_at'=>$this->dateTime(),

        ]);
        $this->createIndex(
            'idx-delivery_method_id',
            'delivery_method',
            'id'
            );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropIndex('idx-delivery_method_id','delivery_method');
        $this->dropTable('{{%delivery_method}}');
    }
}
