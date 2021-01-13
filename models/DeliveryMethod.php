<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "delivery_method".
 *
 * @property int $id
 * @property string|null $d_method_name
 * @property string|null $d_method_day
 * @property float|null $d_method_price
 * @property string|null $created_at
 * @property string|null $updated_at
 *
 * @property Order[] $orders
 */
class DeliveryMethod extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'delivery_method';
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
            [['d_method_price'], 'number'],
            [['created_at', 'updated_at'], 'safe'],
            [['d_method_name', 'd_method_day'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'd_method_name' => 'D Method Name',
            'd_method_day' => 'D Method Day',
            'd_method_price' => 'D Method Price',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Orders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['delivery_method_id' => 'id']);
    }
}
