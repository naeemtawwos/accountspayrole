<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "staff_allowances".
 *
 * @property string $staff_id
 * @property integer $allowance_id
 *
 * @property StaffT $staff
 * @property AllowancesMaster $allowance
 */
class StaffAllowances extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'staff_allowances';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['staff_id', 'allowance_id'], 'required'],
            [['staff_id', 'allowance_id'], 'integer'],
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
            'staff_id' => 'Staff ID',
            'allowance_id' => 'Allowance ID',
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
    public function getAllowance()
    {
        return $this->hasOne(AllowancesMaster::className(), ['allowances_id' => 'allowance_id']);
    }
}
