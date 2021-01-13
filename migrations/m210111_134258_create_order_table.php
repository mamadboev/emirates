<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%order}}`.
 */
class m210111_134258_create_order_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%order}}', [
            'id' => $this->primaryKey(),
            'phone_number'=>$this->string()->notNull(),
            'name'=>$this->string()->notNull(),
            'delivery_type'=>$this->string(),
            'city'=>$this->string(),
            'region'=>$this->string(),
            'street'=>$this->string(),
            'home_number'=>$this->string(),
            'door'=>$this->integer(),
            'entrance'=>$this->smallInteger(),
            'floor'=>$this->smallInteger(),
            'delivery_method_id'=>$this->integer(),
            'payment_type'=>$this->string(),
            'order_describtion'=>$this->text(),
            'order_ip'=>$this->string(),
            'product_id'=>$this->integer(),
            'status'=>$this->smallInteger()->defaultValue(1),
            'total'=>$this->money(),
            'created_at'=>$this->dateTime(),
            'updated_at'=>$this->dateTime(),
        ]);
        $this->addForeignKey(
            'fk-order-delivery_method_id',
            'order',
            'delivery_method_id',
            'delivery_method',
            'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-order-delivery_method_id','order');
        $this->dropTable('{{%order}}');
    }
}
