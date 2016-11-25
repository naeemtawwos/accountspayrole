<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "deductions_monthwise_t".
 *
 * @property integer $id
 * @property integer $deduction_id
 * @property string $staff_id
 * @property string $payment_id
 * @property integer $amount
 *
 * @property StaffT $staff
 * @property DeductionsMaster $deduction
 * @property PaymentT $payment
 */
class DeductionsMonthwise extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'deductions_monthwise_t';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['deduction_id', 'staff_id', 'payment_id', 'amount'], 'required'],
            [['deduction_id', 'staff_id', 'payment_id', 'amount'], 'integer'],
            [['staff_id'], 'exist', 'skipOnError' => true, 'targetClass' => Staff::className(), 'targetAttribute' => ['staff_id' => 'id']],
            [['deduction_id'], 'exist', 'skipOnError' => true, 'targetClass' => DeductionsMaster::className(), 'targetAttribute' => ['deduction_id' => 'deduction_id']],
            [['payment_id'], 'exist', 'skipOnError' => true, 'targetClass' => Payment::className(), 'targetAttribute' => ['payment_id' => 'payment_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'deduction_id' => 'Deduction ID',
            'staff_id' => 'Staff ID',
            'payment_id' => 'Payment ID',
            'amount' => 'Amount',
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPayment()
    {
        return $this->hasOne(Payment::className(), ['payment_id' => 'payment_id']);
    }
}
