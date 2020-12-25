<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "team_user".
 *
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property string $position
 * @property string|null $about_user
 * @property string|null $image
 * @property int $status
 * @property string $created_at
 * @property string|null $updated_at
 * @property string|null $facebook
 * @property string|null $telegram
 * @property string|null $github
 */
class TeamUser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'team_user';
    }

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class'      => TimestampBehavior::class,
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
                'value'      => date('Y-m-d H:i:s'),
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'surname', 'position',], 'required'],
            [['about_user'], 'string'],
            [['status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'surname', 'position', 'facebook', 'telegram', 'github'], 'string', 'max' => 255],
            [['image'], 'file','skipOnEmpty' => false, 'extensions' => 'png, jpg, jpeg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'surname' => 'Surname',
            'position' => 'Position',
            'about_user' => 'About User',
            'image' => 'Image',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'facebook' => 'Facebook',
            'telegram' => 'Telegram',
            'github' => 'Github',
        ];
    }
}
