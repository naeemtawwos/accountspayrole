<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AllowancesMonthwise */
/* @var $form ActiveForm */
?>
<div class="allowances-monthwise">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'allowance_id') ?>
        <?= $form->field($model, 'staff_id') ?>
        <?= $form->field($model, 'payment_id') ?>
        <?= $form->field($model, 'amount') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- allowances-monthwise -->
