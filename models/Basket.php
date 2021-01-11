<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "basket".
 *
 * @property int $id
 * @property string|null $user_ip
 * @property int|null $product_id
 * @property int|null $status
 * @property int|null $count
 * @property int|null $b_count
 *
 * @property Product $product
 */
class Basket extends \yii\db\ActiveRecord
{
    public $image;
    public $name;
    public $price;
    public $sum;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'basket';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'status', 'count', 'b_count'], 'integer'],
            [['user_ip'], 'string', 'max' => 255],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['product_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_ip' => 'User Ip',
            'product_id' => 'Product ID',
            'status' => 'Status',
            'count' => 'Count',
            'b_count' => 'B Count',
        ];
    }

    /**
     * Gets query for [[Product]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }
    public static function pageTotal($provider)
    {
        $total=0;
        foreach($provider as $item){
            $total+= Product::findOne(['id'=>$item->product_id])->price*$item->b_count;
        }
        return $total;
    }



}
