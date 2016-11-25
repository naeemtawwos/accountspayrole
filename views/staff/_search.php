<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StaffSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="staff-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'first_name') ?>

    <?= $form->field($model, 'last_name') ?>

    <?= $form->field($model, 'mobile_number') ?>

    <?= $form->field($model, 'mobile_number2') ?>

    <?php // echo $form->field($model, 'email_id') ?>

    <?php // echo $form->field($model, 'date_birth') ?>

    <?php // echo $form->field($model, 'date_appointment') ?>

    <?php // echo $form->field($model, 'date_current_desig') ?>

    <?php // echo $form->field($model, 'bank_account_no') ?>

    <?php // echo $form->field($model, 'bank_ifsc') ?>

    <?php // echo $form->field($model, 'bank_name') ?>

    <?php // echo $form->field($model, 'bank_branch') ?>

    <?php // echo $form->field($model, 'pay_matrix_id') ?>

    <?php // echo $form->field($model, 'pran_id') ?>

    <?php // echo $form->field($model, 'current_designation') ?>

    <?php // echo $form->field($model, 'prev_designation') ?>

    <?php // echo $form->field($model, 'category') ?>

    <?php // echo $form->field($model, 'basic_pay_6cpc') ?>

    <?php // echo $form->field($model, 'GPF_number') ?>

    <?php // echo $form->field($model, 'date_joining') ?>

    <?php // echo $form->field($model, 'pan_number') ?>

    <?php // echo $form->field($model, 'date_last_inc') ?>

    <?php // echo $form->field($model, 'is_jan_inc') ?>

    <?php // echo $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
