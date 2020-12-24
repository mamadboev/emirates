<?php

use yii\db\Migration;

/**
 * Class m201224_152731_add_status_columnt_to_category
 */
class m201224_152731_add_status_columnt_to_category extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('category','status', $this->smallInteger()->defaultValue(1));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       $this->dropColumn('category','status');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201224_152731_add_status_columnt_to_category cannot be reverted.\n";

        return false;
    }
    */
}
