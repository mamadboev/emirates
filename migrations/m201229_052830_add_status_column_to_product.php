<?php

use yii\db\Migration;

/**
 * Class m201229_052830_add_status_column_to_product
 */
class m201229_052830_add_status_column_to_product extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('product','status',$this->smallInteger()->defaultValue(1));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('product','status');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201229_052830_add_status_column_to_product cannot be reverted.\n";

        return false;
    }
    */
}
