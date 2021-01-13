<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tuman}}`.
 */
class m210112_121805_create_tuman_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tuman}}', [
            'id' => $this->primaryKey(),
            'region_id'=>$this->integer(3)->notNull(),
            'name_lotin'=>$this->string(50)->notNull()->append('COLLATE utf8_unicode_ci'),
            'name_kiril'=>$this->string(50)->notNull()->append('COLLATE utf8_unicode_ci'),
            'updated_at'=>$this->dateTime()->notNull(),
        ],'ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci');

        $this->addForeignKey(
          'fk-tuman-region_id',
          'tuman',
          'region_id',
          'test_sys_region',
            'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-tuman-region_id','tuman');
        $this->dropTable('{{%tuman}}');
    }
}
