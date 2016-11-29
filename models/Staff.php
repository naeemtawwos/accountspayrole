<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "staff_t".
 *
 * @property string $id
 * @property string $first_name
 * @property string $last_name
 * @property string $mobile_number
 * @property string $mobile_number2
 * @property string $email_id
 * @property string $date_birth
 * @property string $date_appointment
 * @property string $date_current_desig
 * @property string $bank_account_no
 * @property string $bank_ifsc
 * @property string $bank_name
 * @property string $bank_branch
 * @property integer $pay_matrix_index
 * @property integer $pay_matrix_level
 * @property string $pran_id
 * @property integer $current_designation
 * @property integer $prev_designation
 * @property integer $category
 * @property integer $basic_pay_6cpc
 * @property string $GPF_number
 * @property string $date_joining
 * @property string $pan_number
 * @property string $date_last_inc
 * @property integer $is_jan_inc
 * @property integer $gender
 * @property integer $status
 *
 * @property AllowancesMonthwiseT[] $allowancesMonthwiseTs
 * @property DeductionsMonthwiseT[] $deductionsMonthwiseTs
 * @property StaffAllowances[] $staffAllowances
 * @property AllowancesMasterT[] $allowances
 * @property StaffDeductions[] $staffDeductions
 * @property DeductionsMaster[] $deductions
 * @property StaffCategory $category
 * @property Designation $currentDesignation
 * @property PaymatrixCpcT $payMatrix
 * @property Designation $prevDesignation
 * @property StaffStatus $status
 */
class Staff extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'staff_t';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'first_name', 'last_name', 'mobile_number', 'date_birth', 'date_appointment', 'date_current_desig', 'bank_account_no', 'bank_ifsc', 'bank_name', 'bank_branch', 'pay_matrix_index', 'pay_matrix_level', 'current_designation',  'category', 'basic_pay_6cpc',  'date_joining', 'date_last_inc','pan_number', 'is_jan_inc', 'gender', 'status'], 'required'],
            [['id', 'bank_account_no',  'pay_matrix_index', 'current_designation', 'prev_designation', 'category', 'basic_pay_6cpc', 'is_jan_inc', 'gender', 'status'], 'integer'],
            [['date_birth', 'date_appointment', 'date_current_desig', 'date_joining', 'date_last_inc'], 'safe'],
            [['date_birth', 'date_appointment', 'date_current_desig', 'date_joining', 'date_last_inc'], 'date', 'format'=>'dd-MM-yyyy'],
            [['first_name', 'last_name', 'bank_name', 'bank_branch'], 'string', 'max' => 20],
            [['mobile_number', 'mobile_number2'], 'string', 'max' => 16],
            [['email_id'], 'string', 'max' => 35],
            [['bank_ifsc'], 'string', 'max' => 11],
            [['pran_id', 'GPF_number', 'pan_number'], 'string', 'max' => 15],
            [['mobile_number'], 'unique'],
            [['category'], 'exist', 'skipOnError' => true, 'targetClass' => StaffCategory::className(), 'targetAttribute' => ['category' => 'id']],
            [['current_designation'], 'exist', 'skipOnError' => true, 'targetClass' => Designation::className(), 'targetAttribute' => ['current_designation' => 'design_id']],
            [['pay_matrix_index'], 'exist', 'skipOnError' => true, 'targetClass' => PaymatrixCpc7::className(), 'targetAttribute' => ['pay_matrix_index' => 'index']],
            [['pay_matrix_level'], 'exist', 'skipOnError' => true, 'targetClass' => PaymatrixCpc7::className(), 'targetAttribute' => ['pay_matrix_level' => 'level']],
            [['prev_designation'], 'exist', 'skipOnError' => true, 'targetClass' => Designation::className(), 'targetAttribute' => ['prev_designation' => 'design_id']],
            [['status'], 'exist', 'skipOnError' => true, 'targetClass' => StaffStatus::className(), 'targetAttribute' => ['status' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Personal Number',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'mobile_number' => 'Mobile Number',
            'mobile_number2' => 'Mobile Number(alternate)',
            'email_id' => 'Email Address',
            'date_birth' => 'Date of Birth',
            'date_appointment' => 'Date Appointment',
            'date_current_desig' => 'Date of Current Designation',
            'bank_account_no' => 'Bank Account Number',
            'bank_ifsc' => 'Bank Ifsc Code',
            'bank_name' => 'Bank Name',
            'bank_branch' => 'Bank Branch',
            'pay_matrix_index' => 'Pay Matrix Index',
            'pay_matrix_level' => 'Pay Matrix Level',
            'pran_id' => 'PRAN ID',
            'current_designation' => 'Current Designation',
            'prev_designation' => 'Previous Designation',
            'category' => 'Category',
            'basic_pay_6cpc' => 'Basic Pay in 6th CPC',
            'GPF_number' => 'GPF Number',
            'date_joining' => 'Date of Joining',
            'pan_number' => 'PAN Number',
            'date_last_inc' => 'Date of Last INC',
            'is_jan_inc' => 'Increment in January?',
            'gender' => 'Gender',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAllowancesMonthwises()
    {
        return $this->hasMany(AllowancesMonthwise::className(), ['staff_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDeductionsMonthwises()
    {
        return $this->hasMany(DeductionsMonthwise::className(), ['staff_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStaffAllowances()
    {
        return $this->hasMany(StaffAllowances::className(), ['staff_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAllowances()
    {
        return $this->hasMany(AllowancesMaster::className(), ['allowances_id' => 'allowance_id'])->viaTable('staff_allowances', ['staff_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStaffDeductions()
    {
        return $this->hasMany(StaffDeductions::className(), ['staff_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDeductions()
    {
        return $this->hasMany(DeductionsMaster::className(), ['deduction_id' => 'deduction_id'])->viaTable('staff_deductions', ['staff_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(StaffCategory::className(), ['id' => 'category']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCurrentDesignation()
    {
        return $this->hasOne(Designation::className(), ['design_id' => 'current_designation']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPayMatrixIndex()
    {
        return $this->hasOne(PaymatrixCpc7::className(), ['id' => 'pay_matrix_index']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPayMatrixLevel()
    {
    	return $this->hasOne(PaymatrixCpc7::className(), ['id' => 'pay_matrix_level']);
    }
    
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrevDesignation()
    {
        return $this->hasOne(Designation::className(), ['design_id' => 'prev_designation']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(StaffStatus::className(), ['id' => 'status']);
    }
   
    /**
     * 
     * 
     * Returns a map containing all Statuses,
     * in the StaffStatus .
     * 
     * example use-case is in forming drop down menus
     * 
     * @return \yii\helper\ArrayHelper
     * @since 1.0.0
     */
    public function getStatusMap() {
    	$statuses = StaffStatus::find()->asArray()->all();
    	$statusMap = ArrayHelper::map($statuses, 'id', 'status');
    	return $statusMap;
    }
    
    /**
     * 
     * Returns a map containing all Categories,
     * in the StaffCategory class.
     * 
     * example use-case is in forming drop down menus
     * 
     * @return \yii\helper\ArrayHelper
     * @since 1.0.0
     */
    public function getCategoryMap() {
    	$categories = StaffCategory::find()->asArray()->all();
    	$categoryMap = ArrayHelper::map($categories, 'id', 'category');
    	return $categoryMap;
    }
    
    /**
     * Returns a map containing all Designations,
     * in the Designation class.
     * 
     * example use-case is in forming drop down menus
     * 
     * @return \yii\helper\ArrayHelper
     * @since 1.0.0
     */
    public function getDesignationMap() {
    	$designations = Designation::find()->asArray()->all();
    	$designationMap = ArrayHelper::map($designations, 'design_id', 'designation_name');
    	return $designationMap;
    }
    
    
    public function getPayMatrixIndexMap() {
    	$paymatrixarray = PaymatrixCpc7::find()->asArray()->all();
    	$indexMap = ArrayHelper::map($paymatrixarray, 'index', 'index');
    	return $indexMap;
    }
    
    public function getPayMatrixLevelMap() {
    	$paymatrixarray = PaymatrixCpc7::find()->asArray()->all();
    	$levelMap = ArrayHelper::map($paymatrixarray, 'level', 'level');
    	return $levelMap;
    }
    /**
     * formats all date fields in yyyy-MM-dd format
     * before saving to the database
     * 
     *overrides the base class function
     *and calls it at the end     
     */
    protected function beforeSave($insert)
    {
    	$this->date_birth = Yii::$app->formatter->asDate($this->date_birth, 'yyyy-MM-dd');
    	$this->date_appointment = Yii::$app->formatter->asDate($this->date_appointment, 'yyyy-MM-dd');
    	$this->date_current_desig = Yii::$app->formatter->asDate($this->date_current_desig, 'yyyy-MM-dd');
    	$this->date_joining = Yii::$app->formatter->asDate($this->date_joining, 'yyyy-MM-dd');
    	$this->date_last_inc = Yii::$app->formatter->asDate($this->date_last_inc, 'yyyy-MM-dd');
    	parent::beforeSave($insert);
    	return true;
    }
    
    /**
     * formats all date fields in dd-MM-yyyy format
     * while reading from the database
     *
     *overrides the afterFind function of the class function
     *and calls it at the end     
     */
    protected function afterFind()
    {
    	$this->date_birth = Yii::$app->formatter->asDate($this->date_birth, 'dd-MM-yyyy');
    	$this->date_appointment = Yii::$app->formatter->asDate($this->date_appointment, 'dd-MM-yyyy');
    	$this->date_current_desig = Yii::$app->formatter->asDate($this->date_current_desig, 'dd-MM-yyyy');
    	$this->date_joining = Yii::$app->formatter->asDate($this->date_joining, 'dd-MM-yyyy');
    	$this->date_last_inc = Yii::$app->formatter->asDate($this->date_last_inc, 'dd-MM-yyyy');
    	//$this->importo = Yii::$app->formatter->asCurrency($this->importo, 'EUR');
    	parent::afterFind();
    	return true;
    }
}
