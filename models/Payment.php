<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "payment_t".
 *
 * @property string $payment_id
 * @property string $staff_id
 * @property integer $gross_pay
 * @property integer $net_pay
 * @property integer $tot_pvt_deduct
 * @property integer $tot_govt_deduct
 * @property string $payment_date
 * @property integer $payment_month
 * @property string $cheque_slip_no
 *
 * @property AllowancesMonthwise[] $allowancesMonthwiseTs
 * @property DeductionsMonthwise[] $deductionsMonthwiseTs
 */
class Payment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'payment_t';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['payment_id', 'staff_id', 'gross_pay', 'net_pay', 'tot_pvt_deduct', 'tot_govt_deduct', 'payment_date', 'payment_month', 'cheque_slip_no'], 'required'],
            [['payment_id', 'staff_id', 'gross_pay', 'net_pay', 'tot_pvt_deduct', 'tot_govt_deduct', 'payment_month'], 'integer'],
            [['payment_date'], 'safe'],
            [['cheque_slip_no'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'payment_id' => 'Payment ID',
            'staff_id' => 'Staff ID',
            'gross_pay' => 'Gross Pay',
            'net_pay' => 'Net Pay',
            'tot_pvt_deduct' => 'Tot Pvt Deduct',
            'tot_govt_deduct' => 'Tot Govt Deduct',
            'payment_date' => 'Payment Date',
            'payment_month' => 'Payment Month',
            'cheque_slip_no' => 'Cheque Slip No',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAllowancesMonthwises()
    {
        return $this->hasMany(AllowancesMonthwise::className(), ['payment_id' => 'payment_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDeductionsMonthwises()
    {
        return $this->hasMany(DeductionsMonthwise::className(), ['payment_id' => 'payment_id']);
    }
}
