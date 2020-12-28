<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property int $category_id
 * @property string|null $p_name_uz
 * @property string|null $p_name_en
 * @property string|null $p_name_ru
 * @property string|null $p_image
 * @property string|null $p_describtion
 * @property string $created_at
 * @property string|null $updated_at
 * @property int|null $created_by
 *
 * @property Category $category
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'created_at'], 'required'],
            [['category_id', 'created_by'], 'integer'],
            [['p_describtion'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['p_name_uz', 'p_name_en', 'p_name_ru', 'p_image'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'p_name_uz' => 'P Name Uz',
            'p_name_en' => 'P Name En',
            'p_name_ru' => 'P Name Ru',
            'p_image' => 'P Image',
            'p_describtion' => 'P Describtion',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}
