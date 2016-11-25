<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AllowancesMonthwise;

/**
 * AllowancesMonthwiseSearch represents the model behind the search form about `app\models\AllowancesMonthwise`.
 */
class AllowancesMonthwiseSearch extends AllowancesMonthwise
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'allowance_id', 'staff_id', 'payment_id', 'amount'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = AllowancesMonthwise::find();

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
            'allowance_id' => $this->allowance_id,
            'staff_id' => $this->staff_id,
            'payment_id' => $this->payment_id,
            'amount' => $this->amount,
        ]);

        return $dataProvider;
    }
}
