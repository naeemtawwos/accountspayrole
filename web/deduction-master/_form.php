<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DeductionsMaster */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="deductions-master-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'deduction_desc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deduction_type')->textInput() ?>

    <?= $form->field($model, 'deduction_percent')->textInput() ?>

    <?= $form->field($model, 'deduction_const')->textInput() ?>

    <?= $form->field($model, 'is_recurring')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
