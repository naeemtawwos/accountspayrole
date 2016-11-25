<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\StaffDeductions;

/**
 * StaffDeductionsSearch represents the model behind the search form about `app\models\StaffDeductions`.
 */
class StaffDeductionsSearch extends StaffDeductions
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['staff_id', 'deduction_id', 'no_installments', 'total_amount'], 'integer'],
            [['date_first_installment'], 'safe'],
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
        $query = StaffDeductions::find();

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
            'staff_id' => $this->staff_id,
            'deduction_id' => $this->deduction_id,
            'no_installments' => $this->no_installments,
            'date_first_installment' => $this->date_first_installment,
            'total_amount' => $this->total_amount,
        ]);

        return $dataProvider;
    }
}
