<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "paymatrix_cpc7_t".
 *
 * @property integer $id
 * @property integer $index
 * @property integer $level
 * @property integer $fixation
 *
 * @property Staff[] $staffTs
 */
class PaymatrixCpc7 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'paymatrix_cpc7_t';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['index', 'level', 'fixation'], 'required'],
            [['index', 'level', 'fixation'], 'integer'],
            [['index', 'level'], 'unique', 'targetAttribute' => ['index', 'level'], 'message' => 'The combination of Index and Level has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'index' => 'Index',
            'level' => 'Level',
            'fixation' => 'Fixation',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStaffs()
    {
        return $this->hasMany(Staff::className(), ['pay_matrix_id' => 'id']);
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */

}
