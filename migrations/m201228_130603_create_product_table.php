<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product}}`.
 */
class m201228_130603_create_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product}}', [
            'id' => $this->primaryKey(),
            'category_id'=>$this->integer()->notNull(),
            'p_name_uz'=>$this->string(),
            'p_name_en'=>$this->string(),
            'p_name_ru'=>$this->string(),
            'p_image'=>$this->string(),
            'p_describtion'=>$this->text(),
            'created_at'=>$this->dateTime()->notNull(),
            'updated_at'=>$this->dateTime(),
            'created_by'=>$this->integer()
        ]);
        $this->createIndex(
            'idx-product-id',
            'product',
            'id'
        );
        $this->addForeignKey(
            'fk-product-category_id',
            'product',
            'category_id',
            'category',
            'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-product-category_id','product');
        $this->dropIndex('idx-product-id','product');
        $this->dropTable('{{%product}}');
    }
}
