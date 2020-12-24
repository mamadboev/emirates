<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%team_user}}`.
 */
class m201224_191108_create_team_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%team_user}}', [
            'id' => $this->primaryKey(),
            'name'=>$this->string()->notNull(),
            'surname'=>$this->string()->notNull(),
            'position'=>$this->string()->notNull(),
            'about_user'=>$this->text(),
            'image'=>$this->string(),
            'status'=>$this->smallInteger()->defaultValue(1)->notNull(),
            'created_at'=>$this->dateTime()->notNull(),
            'updated_at'=>$this->dateTime(),
            'facebook'=>$this->string(),
            'telegram'=>$this->string(),
            'github'=>$this->string(),
        ]);
        $this->createIndex(
            'idx-team_user-id',
            'team_user',
            'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropIndex('idx-team_user-id','team-user');
        $this->dropTable('{{%team_user}}');
    }
}
