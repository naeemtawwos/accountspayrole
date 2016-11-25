<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "staff_deductions".
 *
 * @property string $staff_id
 * @property integer $deduction_id
 * @property integer $no_installments
 * @property string $date_first_installment
 * @property integer $total_amount
 *
 * @property Staff $staff
 * @property DeductionsMasterT $deduction
 */
class StaffDeductions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'staff_deductions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['staff_id', 'deduction_id'], 'required'],
            [['staff_id', 'deduction_id', 'no_installments', 'total_amount'], 'integer'],
            [['date_first_installment'], 'safe'],
            [['staff_id'], 'exist', 'skipOnError' => true, 'targetClass' => Staff::className(), 'targetAttribute' => ['staff_id' => 'id']],
            [['deduction_id'], 'exist', 'skipOnError' => true, 'targetClass' => DeductionsMaster::className(), 'targetAttribute' => ['deduction_id' => 'deduction_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'staff_id' => 'Staff ID',
            'deduction_id' => 'Deduction ID',
            'no_installments' => 'No Installments',
            'date_first_installment' => 'Date First Installment',
            'total_amount' => 'Total Amount',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStaff()
    {
        return $this->hasOne(Staff::className(), ['id' => 'staff_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDeduction()
    {
        return $this->hasOne(DeductionsMaster::className(), ['deduction_id' => 'deduction_id']);
    }
}
