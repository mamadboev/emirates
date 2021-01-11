<?php

use yii\db\Migration;

/**
 * Class m210111_073622_add_count_column_to_product
 */
class m210111_073622_add_count_column_to_product extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('product','p_count',$this->integer()->defaultValue(1));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('product','p_count');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210111_073622_add_count_column_to_product cannot be reverted.\n";

        return false;
    }
    */
}
