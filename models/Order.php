<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property string $phone_number
 * @property string $name
 * @property string|null $delivery_type
 * @property string|null $city
 * @property string|null $region
 * @property string|null $street
 * @property string|null $home_number
 * @property int|null $door
 * @property int|null $entrance
 * @property int|null $floor
 * @property int|null $delivery_method_id
 * @property string|null $payment_type
 * @property string|null $order_describtion
 * @property string|null $order_ip
 * @property int|null $product_id
 * @property int|null $status
 * @property float|null $total
 * @property string|null $created_at
 * @property string|null $updated_at
 *
 * @property DeliveryMethod $deliveryMethod
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
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
            [['phone_number', 'name'], 'required'],
            [['door', 'entrance', 'floor', 'delivery_method_id', 'product_id', 'status'], 'integer'],
            [['order_describtion'], 'string'],
            [['total'], 'number'],
            [['created_at', 'updated_at'], 'safe'],
            [['phone_number', 'name', 'delivery_type', 'city', 'region', 'street', 'home_number', 'payment_type', 'order_ip'], 'string', 'max' => 255],
            [['delivery_method_id'], 'exist', 'skipOnError' => true, 'targetClass' => DeliveryMethod::className(), 'targetAttribute' => ['delivery_method_id' => 'id']],
            [
                ['phone_number'],
                'match',
                'pattern' => '/^\((9[1|3|4|5|7|8|9|0])|(33)|(88)\)\-\d{3}\-\d{2}\-\d{2}$/',
            ],
            [
                ['phone_number'],
                function ($attribute, $params) {
                    preg_match_all('/\d/', $this->phone_number, $matches);
                    $this->phone = implode('', ArrayHelper::getValue($matches, 0, []));
                },
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'phone_number' => 'Phone Number',
            'name' => 'Name',
            'delivery_type' => 'Delivery Type',
            'city' => 'City',
            'region' => 'Region',
            'street' => 'Street',
            'home_number' => 'Home Number',
            'door' => 'Door',
            'entrance' => 'Entrance',
            'floor' => 'Floor',
            'delivery_method_id' => 'Delivery Method ID',
            'payment_type' => 'Payment Type',
            'order_describtion' => 'Order Describtion',
            'order_ip' => 'Order Ip',
            'product_id' => 'Product ID',
            'status' => 'Status',
            'total' => 'Total',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[DeliveryMethod]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDeliveryMethod()
    {
        return $this->hasOne(DeliveryMethod::className(), ['id' => 'delivery_method_id']);
    }
}
