<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\models\Staff */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="staff-form ">

    <?php $form = ActiveForm::begin([
            'options' => [
				'class' => 'form-signin'
             ]
        ]); ?>
<div class="form-group">

    <?= $form->field($model, 'id',['inputOptions'=>['class'=>'form-control ']])->textInput(['maxlength' => true]) ?>
</div>


	<?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mobile_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mobile_number2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_birth')->widget(DatePicker::className(), ['dateFormat'=>'dd-MM-yyyy','clientOptions'=>['yearRange'=>'1920:2099'],]) ?>

    <?= $form->field($model, 'date_appointment')->widget(DatePicker::className(), ['dateFormat'=>'dd-MM-yyyy','clientOptions'=>['yearRange'=>'1920:2099'],]) ?>

    <?= $form->field($model, 'date_current_desig')->widget(DatePicker::className(), ['dateFormat'=>'dd-MM-yyyy','clientOptions'=>['yearRange'=>'1920:2099'],]) ?>

    <?= $form->field($model, 'bank_account_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bank_ifsc')->textInput() ?>

    <?= $form->field($model, 'bank_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bank_branch')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pay_matrix_index')->dropDownList($model->payMatrixIndexMap, ['prompt' => '']); ?>
    
    <?= $form->field($model, 'pay_matrix_level')->dropDownList($model->payMatrixLevelMap, ['prompt' => '']); ?>

    <?= $form->field($model, 'pran_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'current_designation')->dropDownList($model->designationMap, ['prompt' => '']);?>

    <?= $form->field($model, 'prev_designation')->dropDownList($model->designationMap, ['prompt' => '']); ?>

    <?= $form->field($model, 'category')->dropDownList($model->categoryMap, ['prompt' => '']); ?>

    <?= $form->field($model, 'basic_pay_6cpc')->textInput() ?>

    <?= $form->field($model, 'GPF_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_joining')->widget(DatePicker::className(), ['dateFormat'=>'dd-MM-yyyy','clientOptions'=>['yearRange'=>'1920:2099'],]) ?>

    <?= $form->field($model, 'pan_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_last_inc')-> widget(\yii\jui\DatePicker::className(), ['dateFormat'=>'dd-MM-yyyy','clientOptions'=>['yearRange'=>'1920:2099'],])?>

    <?= $form->field($model, 'is_jan_inc')->checkbox() ?>

    <?= $form->field($model, 'gender')->dropDownList([ '0' => 'Female', '1' => 'Male'], ['prompt' => '']) ?>

	<?= $form->field($model, 'status')->dropDownList($model->statusMap, ['prompt' => '']);?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
</div>
    <?php ActiveForm::end(); ?>

</div>
