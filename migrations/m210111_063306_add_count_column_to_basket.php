<?php

use yii\db\Migration;

/**
 * Class m210111_063306_add_count_column_to_basket
 */
class m210111_063306_add_count_column_to_basket extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('basket','b_count',$this->integer()->defaultValue(1));

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
      $this->dropColumn('basket','b_count');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210111_063306_add_count_column_to_basket cannot be reverted.\n";

        return false;
    }
    */
}
