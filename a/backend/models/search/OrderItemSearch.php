<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\OrderItem;

/**
 * OrderItemSearch represents the model behind the search form of `backend\models\OrderItem`.
 */
class OrderItemSearch extends OrderItem
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'product_id', 'quantity'], 'integer'],
            [['buyer_name', 'buyer_address', 'buyer_phone', 'buy_date'], 'safe'],
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
        $query = OrderItem::find();

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
            'product_id' => $this->product_id,
            'quantity' => $this->quantity,
            'buy_date' => $this->buy_date,
        ]);

        $query->andFilterWhere(['like', 'buyer_name', $this->buyer_name])
            ->andFilterWhere(['like', 'buyer_address', $this->buyer_address])
            ->andFilterWhere(['like', 'buyer_phone', $this->buyer_phone]);

        return $dataProvider;
    }
}
