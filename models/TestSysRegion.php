<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "test_sys_region".
 *
 * @property int $id
 * @property string $name_uz
 * @property string $name_ru
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class TestSysRegion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'test_sys_region';
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
            [['name_uz', 'name_ru'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['name_uz', 'name_ru'], 'string', 'max' => 191],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_uz' => 'Name Uz',
            'name_ru' => 'Name Ru',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
    public static function city_list()
    {
        $cities =  self::find()->select(['id','name_uz','name_ru'])->asArray()->all();
        $data = ArrayHelper::map($cities, 'id', 'name_uz');
        return $data;
    }
}
