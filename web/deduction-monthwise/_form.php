<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DeductionsMonthwise */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="deductions-monthwise-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'deduction_id')->textInput() ?>

    <?= $form->field($model, 'staff_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'payment_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'amount')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
