<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Order;

/**
 * OrderSearch represents the model behind the search form of `app\models\Order`.
 */
class OrderSearch extends Order
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'door', 'entrance', 'floor', 'delivery_method_id', 'product_id', 'status'], 'integer'],
            [['phone_number', 'name', 'delivery_type', 'city', 'region', 'street', 'home_number', 'payment_type', 'order_describtion', 'order_ip', 'created_at', 'updated_at'], 'safe'],
            [['total'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Order::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'door' => $this->door,
            'entrance' => $this->entrance,
            'floor' => $this->floor,
            'delivery_method_id' => $this->delivery_method_id,
            'product_id' => $this->product_id,
            'status' => $this->status,
            'total' => $this->total,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'phone_number', $this->phone_number])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'delivery_type', $this->delivery_type])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'region', $this->region])
            ->andFilterWhere(['like', 'street', $this->street])
            ->andFilterWhere(['like', 'home_number', $this->home_number])
            ->andFilterWhere(['like', 'payment_type', $this->payment_type])
            ->andFilterWhere(['like', 'order_describtion', $this->order_describtion])
            ->andFilterWhere(['like', 'order_ip', $this->order_ip]);

        return $dataProvider;
    }
}
