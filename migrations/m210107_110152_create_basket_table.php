<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%basket}}`.
 */
class m210107_110152_create_basket_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%basket}}', [
            'id' => $this->primaryKey(),
            'user_ip'=>$this->string(),
            'product_id'=>$this->integer()
        ]);
        $this->addForeignKey(
            'fk-basket-product_id',
            'basket',
            'product_id',
            'product',
            'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-basket-product_id','basket');
        $this->dropTable('{{%basket}}');
    }
}
