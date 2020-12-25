<?php

use yii\db\Migration;


/**
 * Class m201225_052631_add_create_udpate_user_id_columns_to_category
 */
class m201225_052631_add_create_udpate_user_id_columns_to_category extends Migration
{

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('category','created_at',$this->dateTime());
        $this->addColumn('category','updated_at',$this->dateTime());
        $this->addColumn('category','created_by',$this->integer());

        $this->addForeignKey(
            'fk-category-team_user-id',
            'category',
            'created_by',
            'team_user',
            'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-category-team_user-id','category');
        $this->dropColumn('category','created_by');
        $this->dropColumn('category','updated_at');
        $this->dropColumn('category','created_at');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201225_052631_add_create_udpate_user_id_columns_to_category cannot be reverted.\n";

        return false;
    }
    */
}
