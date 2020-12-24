<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string|null $c_name_uz
 * @property string|null $c_name_en
 * @property string|null $c_name_ru
 * @property string|null $c_image
 * @property float|null $c_min_price
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
            [['c_name_uz', 'c_name_en', 'c_name_ru'], 'string', 'max' => 80],
            [['c_image'], 'string', 'max' => 255],
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
        ];
    }
}
