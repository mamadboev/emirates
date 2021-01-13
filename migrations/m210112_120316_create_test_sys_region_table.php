<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%test_sys_region}}`.
 */
class m210112_120316_create_test_sys_region_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%test_sys_region}}', [
            'id' => $this->primaryKey(),
            'name_uz'=>$this->string(191)->notNull(),
            'name_ru'=>$this->string(191)->notNull(),
            'created_at'=>$this->dateTime(),
            'updated_at'=>$this->dateTime(),
        ],'ENGINE=InnoDB DEFAULT CHARSET=utf8');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%test_sys_region}}');
    }
}
