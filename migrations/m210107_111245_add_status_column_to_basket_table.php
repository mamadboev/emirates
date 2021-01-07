<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%basket}}`.
 */
class m210107_111245_add_status_column_to_basket_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('basket','status',$this->smallInteger()->defaultValue(1));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('basket','status');
    }
}
