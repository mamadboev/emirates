<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%category}}`.
 */
class m201224_110156_create_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%category}}', [
            'id' => $this->primaryKey(),
            'c_name_uz'=>$this->string(80),
            'c_name_en'=>$this->string(80),
            'c_name_ru'=>$this->string(80),
            'c_image'=>$this->string(),
            'c_min_price'=>$this->money()->defaultValue(0)
        ]);
        $this->createIndex(
            'idx-category-id',
            'category',
            'id'
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropIndex('idx-category-id','category');
        $this->dropTable('{{%category}}');
    }
}
