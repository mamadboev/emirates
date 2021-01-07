<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string|null $c_name_uz
 * @property string|null $c_name_en
 * @property string|null $c_name_ru
 * @property string|null $c_image
 * @property float|null $c_min_price
 * @property int|null $status
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property int|null $created_by
 *
 * @property TeamUser $createdBy
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['c_min_price'], 'number'],
            [['status', 'created_by'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['c_name_uz', 'c_name_en', 'c_name_ru'], 'string', 'max' => 80],
            [['c_image'], 'string', 'max' => 255],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => TeamUser::className(), 'targetAttribute' => ['created_by' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'c_name_uz' => 'C Name Uz',
            'c_name_en' => 'C Name En',
            'c_name_ru' => 'C Name Ru',
            'c_image' => 'C Image',
            'c_min_price' => 'C Min Price',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
        ];
    }

    /**
     * Gets query for [[CreatedBy]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(TeamUser::className(), ['id' => 'created_by']);
    }

    public static function category_list()
    {
        $category =  self::find()->select(['id', 'c_name_en'])->where(['status' => 1])->asArray()->all();
        $data = ArrayHelper::map($category, 'id', 'c_name_en');
        return $data;
    }
    public static function getCategoryname($id)
    {
         $name = self::findOne(['id'=>$id]);
         return $name->c_name_en;
    }

}
