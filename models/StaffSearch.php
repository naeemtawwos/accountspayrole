<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Staff;

/**
 * StaffSearch represents the model behind the search form about `app\models\Staff`.
 */
class StaffSearch extends Staff
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'bank_account_no', 'bank_ifsc', 'pay_matrix_index','pay_matrix_level', 'current_designation', 'prev_designation', 'category', 'basic_pay_6cpc', 'is_jan_inc', 'gender', 'status'], 'integer'],
            [['first_name', 'last_name', 'mobile_number', 'mobile_number2', 'email_id', 'date_birth', 'date_appointment', 'date_current_desig', 'bank_name', 'bank_branch', 'pran_id', 'GPF_number', 'date_joining', 'pan_number', 'date_last_inc'], 'safe'],
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
        $query = Staff::find();

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
            'date_birth' => $this->date_birth,
            'date_appointment' => $this->date_appointment,
            'date_current_desig' => $this->date_current_desig,
            'bank_account_no' => $this->bank_account_no,
            'bank_ifsc' => $this->bank_ifsc,
            'pay_matrix_index' => $this->pay_matrix_index,
        	'pay_matrix_level' => $this->pay_matrix_level,
            'current_designation' => $this->current_designation,
            'prev_designation' => $this->prev_designation,
            'category' => $this->category,
            'basic_pay_6cpc' => $this->basic_pay_6cpc,
            'date_joining' => $this->date_joining,
            'date_last_inc' => $this->date_last_inc,
            'is_jan_inc' => $this->is_jan_inc,
            'gender' => $this->gender,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'mobile_number', $this->mobile_number])
            ->andFilterWhere(['like', 'mobile_number2', $this->mobile_number2])
            ->andFilterWhere(['like', 'email_id', $this->email_id])
            ->andFilterWhere(['like', 'bank_name', $this->bank_name])
            ->andFilterWhere(['like', 'bank_branch', $this->bank_branch])
            ->andFilterWhere(['like', 'pran_id', $this->pran_id])
            ->andFilterWhere(['like', 'GPF_number', $this->GPF_number])
            ->andFilterWhere(['like', 'pan_number', $this->pan_number]);

        return $dataProvider;
    }
}
