<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "allowances_master_t".
 *
 * @property integer $allowances_id
 * @property string $allowances_desc
 * @property integer $allowances_percent
 * @property integer $allowances_const
 * @property integer $is_recurring
 *
 * @property AllowancesMonthwiseT[] $allowancesMonthwiseTs
 * @property StaffAllowances[] $staffAllowances
 * @property Staff[] $staff
 */
class AllowancesMaster extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'allowances_master_t';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['allowances_desc', 'is_recurring'], 'required'],
            [['allowances_percent', 'allowances_const', 'is_recurring'], 'integer'],
            [['allowances_desc'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'allowances_id' => 'Allowances ID',
            'allowances_desc' => 'Allowances Desc',
            'allowances_percent' => 'Allowances Percent',
            'allowances_const' => 'Allowances Const',
            'is_recurring' => 'Is Recurring',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAllowancesMonthwises()
    {
        return $this->hasMany(AllowancesMonthwise::className(), ['allowance_id' => 'allowances_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStaffAllowances()
    {
        return $this->hasMany(StaffAllowances::className(), ['allowance_id' => 'allowances_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStaff()
    {
        return $this->hasMany(Staff::className(), ['id' => 'staff_id'])->viaTable('staff_allowances', ['allowance_id' => 'allowances_id']);
    }
}
