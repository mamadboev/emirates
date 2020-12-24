<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Category;

/**
 * CatregorySearch represents the model behind the search form of `app\models\Category`.
 */
class CatregorySearch extends Category
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['c_name_uz', 'c_name_en', 'c_name_ru', 'c_image'], 'safe'],
            [['c_min_price'], 'number'],
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
        $query = Category::find();

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
            'c_min_price' => $this->c_min_price,
        ]);

        $query->andFilterWhere(['like', 'c_name_uz', $this->c_name_uz])
            ->andFilterWhere(['like', 'c_name_en', $this->c_name_en])
            ->andFilterWhere(['like', 'c_name_ru', $this->c_name_ru])
            ->andFilterWhere(['like', 'c_image', $this->c_image]);

        return $dataProvider;
    }
}
