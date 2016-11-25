<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "designation_t".
 *
 * @property integer $design_id
 * @property string $designation_name
 * @property integer $design_group
 *
 * @property Staff[] $staffs
 * @property Staff[] $staffs0
 */
class Designation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'designation_t';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['designation_name', 'design_group'], 'required'],
            [['design_group'], 'integer'],
            [['designation_name'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'design_id' => 'Design ID',
            'designation_name' => 'Designation Name',
            'design_group' => 'Design Group',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStaffs()
    {
        return $this->hasMany(Staff::className(), ['current_designation' => 'design_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStaffs0()
    {
        return $this->hasMany(Staff::className(), ['prev_designation' => 'design_id']);
    }
}
