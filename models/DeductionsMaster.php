<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "deductions_master_t".
 *
 * @property integer $deduction_id
 * @property string $deduction_desc
 * @property integer $deduction_type
 * @property integer $deduction_percent
 * @property integer $deduction_const
 * @property integer $is_recurring
 *
 * @property DeductionsMonthwise[] $deductionsMonthwises
 * @property StaffDeductions[] $staffDeductions
 * @property Staff[] $staff
 */
class DeductionsMaster extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'deductions_master_t';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['deduction_desc', 'deduction_type', 'is_recurring'], 'required'],
            [['deduction_type', 'deduction_percent', 'deduction_const', 'is_recurring'], 'integer'],
            [['deduction_desc'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'deduction_id' => 'Deduction ID',
            'deduction_desc' => 'Deduction Desc',
            'deduction_type' => 'Deduction Type',
            'deduction_percent' => 'Deduction Percent',
            'deduction_const' => 'Deduction Const',
            'is_recurring' => 'Is Recurring',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDeductionsMonthwises()
    {
        return $this->hasMany(DeductionsMonthwise::className(), ['deduction_id' => 'deduction_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStaffDeductions()
    {
        return $this->hasMany(StaffDeductions::className(), ['deduction_id' => 'deduction_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStaff()
    {
        return $this->hasMany(Staff::className(), ['id' => 'staff_id'])->viaTable('staff_deductions', ['deduction_id' => 'deduction_id']);
    }
}
