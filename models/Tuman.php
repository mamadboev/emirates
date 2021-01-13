<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "tuman".
 *
 * @property int $id
 * @property int $region_id
 * @property string $name_lotin
 * @property string $name_kiril
 * @property string $updated_at
 */
class Tuman extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tuman';
    }

    /**
     * @return array
     */
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
            [['region_id', 'name_lotin', 'name_kiril', 'updated_at'], 'required'],
            [['region_id'], 'integer'],
            [['updated_at'], 'safe'],
            [['name_lotin', 'name_kiril'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'region_id' => 'Region ID',
            'name_lotin' => 'Name Lotin',
            'name_kiril' => 'Name Kiril',
            'updated_at' => 'Updated At',
        ];
    }
    public static function region_list()
    {
        $regions =  self::find()->select(['id','name_lotin'])->asArray()->all();
        $data = ArrayHelper::map($regions, 'id', 'name_lotin');
        return $data;
    }
}

