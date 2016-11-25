<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StaffDeductions */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="staff-deductions-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'staff_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deduction_id')->textInput() ?>

    <?= $form->field($model, 'no_installments')->textInput() ?>

    <?= $form->field($model, 'date_first_installment')->textInput() ?>

    <?= $form->field($model, 'total_amount')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
