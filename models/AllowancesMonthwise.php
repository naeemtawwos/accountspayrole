<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "allowances_monthwise_t".
 *
 * @property integer $id
 * @property integer $allowance_id
 * @property string $staff_id
 * @property string $payment_id
 * @property integer $amount
 *
 * @property Payment $payment
 * @property Staff $staff
 * @property AllowancesMasterT $allowance
 */
class AllowancesMonthwise extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'allowances_monthwise_t';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['allowance_id', 'staff_id', 'payment_id', 'amount'], 'required'],
            [['allowance_id', 'staff_id', 'payment_id', 'amount'], 'integer'],
            [['payment_id'], 'exist', 'skipOnError' => true, 'targetClass' => Payment::className(), 'targetAttribute' => ['payment_id' => 'payment_id']],
            [['staff_id'], 'exist', 'skipOnError' => true, 'targetClass' => Staff::className(), 'targetAttribute' => ['staff_id' => 'id']],
            [['allowance_id'], 'exist', 'skipOnError' => true, 'targetClass' => AllowancesMaster::className(), 'targetAttribute' => ['allowance_id' => 'allowances_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'allowance_id' => 'Allowance ID',
            'staff_id' => 'Staff ID',
            'payment_id' => 'Payment ID',
            'amount' => 'Amount',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPayment()
    {
        return $this->hasOne(Payment::className(), ['payment_id' => 'payment_id']);
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
    public function getAllowance()
    {
        return $this->hasOne(AllowancesMaster::className(), ['allowances_id' => 'allowance_id']);
    }
}
