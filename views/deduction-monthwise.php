<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DeductionsMonthwise */
/* @var $form ActiveForm */
?>
<div class="deduction-monthwise">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'deduction_id') ?>
        <?= $form->field($model, 'staff_id') ?>
        <?= $form->field($model, 'payment_id') ?>
        <?= $form->field($model, 'amount') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- deduction-monthwise -->
