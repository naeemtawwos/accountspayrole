<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Staff */
/* @var $form ActiveForm */
?>
<div class="staff">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'id') ?>
        <?= $form->field($model, 'first_name') ?>
        <?= $form->field($model, 'last_name') ?>
        <?= $form->field($model, 'mobile_number') ?>
        <?= $form->field($model, 'date_birth') ?>
        <?= $form->field($model, 'date_appointment') ?>
        <?= $form->field($model, 'date_current_desig') ?>
        <?= $form->field($model, 'bank_account_no') ?>
        <?= $form->field($model, 'bank_ifsc') ?>
        <?= $form->field($model, 'bank_name') ?>
        <?= $form->field($model, 'bank_branch') ?>
        <?= $form->field($model, 'pay_matrix_index') ?>
        <?= $form->field($model, 'pay_matrix_level') ?>
        <?= $form->field($model, 'pran_id') ?>
        <?= $form->field($model, 'current_designation') ?>
        <?= $form->field($model, 'prev_designation') ?>
        <?= $form->field($model, 'category') ?>
        <?= $form->field($model, 'basic_pay_6cpc') ?>
        <?= $form->field($model, 'GPF_number') ?>
        <?= $form->field($model, 'date_joining') ?>
        <?= $form->field($model, 'pan_number') ?>
        <?= $form->field($model, 'date_last_inc') ?>
        <?= $form->field($model, 'is_jan_inc') ?>
        <?= $form->field($model, 'gender') ?>
        <?= $form->field($model, 'status') ?>
        <?= $form->field($model, 'mobile_number2') ?>
        <?= $form->field($model, 'email_id') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- staff -->
