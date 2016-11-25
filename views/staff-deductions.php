<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StaffDeductions */
/* @var $form ActiveForm */
?>
<div class="staff-deductions">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'staff_id') ?>
        <?= $form->field($model, 'deduction_id') ?>
        <?= $form->field($model, 'no_installments') ?>
        <?= $form->field($model, 'total_amount') ?>
        <?= $form->field($model, 'date_first_installment') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- staff-deductions -->
